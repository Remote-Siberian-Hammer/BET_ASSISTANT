<?php
namespace App\Domain\Service;

use App\Repository\AccountRapidRepository;
use App\Domain\IService\IAccountRapidService;
use App\DTO\AccountRapid\CreateAccountRapidDTO;
use App\DTO\AccountRapid\ShowAccountRapidDTO;
use App\DTO\AccountRapid\DeleteAccountRapidDTO;



class AccountRapidService implements IAccountRapidService
{
    /**
     * Реализация репозитория AccountRapidRepository.
     *
     * @var AccountRapidRepository
     */
    protected AccountRapidRepository $repository;

    /**
     * Создать новый экземпляр контроллера.
     *
     * @return void
     */
    public function __construct()
    {
        $this->repository = new AccountRapidRepository();
    }

    public function CreateService(CreateAccountRapidDTO $context)
    {
        return $this->repository->Create($context);
    }

    public function ShowService(ShowAccountRapidDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function AllService()
    {
        return $this->repository->All();
    }

    public function DeleteService(DeleteAccountRapidDTO $context)
    {
        return $this->repository->Delete($context);
    }
}