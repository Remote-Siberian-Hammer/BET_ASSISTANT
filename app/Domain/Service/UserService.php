<?php
namespace App\Domain\Service;

use App\Repository\UserRepository;
use App\Domain\IService\IUserService;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\ResetToPasswordUserDTO;
use App\DTO\Mail\SendCreateUserDTO;
use App\DTO\Mail\SendResetToPasswordUserDTO;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\Jobs\SendCreateUserMailJob;
use App\Jobs\SendResetToPasswordUserMailJob;
use ErrorException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Mail\ResetToPasswordUserMail;
use Illuminate\Support\Facades\Mail;


class UserService implements IUserService
{
    /**
     * Реализация репозитория User.
     *
     * @var UserRepository
     */
    protected UserRepository $repository;
    protected EmailService $emailService;

    /**
     * Создать новый экземпляр контроллера.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        $this->repository = new UserRepository();
        $this->emailService = new EmailService();
    }

    public function CreateUserService(CreateUserDTO $context, SendCreateUserDTO $emailContext)
    {
        $repository = $this->repository->Create($context);
        $repository->Email ? dispatch(new SendCreateUserMailJob($emailContext)) : throw new ErrorException("Не удалось отправить письмо на почту!");
        return $repository;
        
    }

    public function ShowUserByIdService(SearchUserByIdDTO $context)
    {
        return $this->repository->ShowUserById($context);
    }

    public function ShowUserByEmailService(SearchUserByEmailDTO $context)
    {
        return $this->repository->ShowUserByEmail($context);
    }

    public function ResetToPasswordUserService(ResetToPasswordUserDTO $context, SendResetToPasswordUserDTO $emailContext)
    {
        $newPassword = Str::random(10);
        // Подмена пароля, он изначально null
        $emailContext->Password = $newPassword;
        $repository = $this->repository->ResetToPasswordUser($context, $newPassword);
        $repository ? dispatch(new SendResetToPasswordUserMailJob($emailContext)) : throw new ErrorException("Такой пользователь не существует!");
        return $repository;
    }

    public function AuthUserService(AuthUserDTO $context, SearchUserByEmailDTO $emailContext)
    {
        $user = $this->repository->ShowUserByEmail($emailContext);
        if (Hash::check($context->Password, json_decode($user[0], true)["Password"]))
        {
            return [
                "user" => json_decode($user[0], true),
                "bearer_token" => $this->repository->Auth($context)
            ];
        }
        else
        {
            throw new \Exception("Пароли не совпадают");
        }
    }

    public function LogoutUserService(LogoutUserDTO $context)
    {
        return $this->repository->Logout($context);
    }
}