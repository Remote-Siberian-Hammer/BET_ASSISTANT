<?php
namespace App\Domain\Service;

use App\Repository\UserRepository;
use App\Domain\IService\IUserService;
use App\DTO\User\CreateUserDTO;

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
}