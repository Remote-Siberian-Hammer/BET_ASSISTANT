<?php
namespace App\Domain\Service;

use App\Repository\UserRepository;
use App\Domain\IService\IUserService;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\Mail\SendCreateUserDTO;
use App\Jobs\SendCreateUserMailJob;
use ErrorException;

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
}