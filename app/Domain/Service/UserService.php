<?php
namespace App\Domain\Service;

use App\Repository\UserRepository;
use App\Domain\IService\IUserService;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;

class UserService implements IUserService
{
    /**
     * Реализация репозитория User.
     *
     * @var UserRepository
     */
    protected UserRepository $repository;

    /**
     * Создать новый экземпляр контроллера.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function CreateUserService(CreateUserDTO $context)
    {
        return $this->repository->Create($context);
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