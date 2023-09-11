<?php
namespace App\Services;

use App\Core\DTO\RapidUser\CreateRapidUserDTO;
use App\Core\DTO\RapidUser\ShowRapidUserDTO;
use App\Core\DTO\RapidUser\DeleteRapidUserDTO;
use App\Core\DTO\RapidUser\Session\CreateRapidUserSessionDTO;
use App\Core\DTO\RapidUser\Session\UpdateRapidUserSessionDTO;
use App\Core\Entityes\RapidProfiles\RapidProfileEntity;
use App\Core\Entityes\RapidProfiles\RapidProfileSessionEntity;
use App\Core\IServices\IRapidUserService;
use App\Repository\RapidUserRepository;

class RapidUserService implements IRapidUserService
{
    protected RapidUserRepository $repository;

    public function __construct()
    {
        $this->repository = new RapidUserRepository();
    }

	public function createAction(CreateRapidUserDTO $context)
    {
        return $this->repository->create(
            new RapidProfileEntity($context->getArray())
        );
    }

    public function showAction(ShowRapidUserDTO $context)
    {
        return $this->repository->show(
            $context->getArray()["id"]
        );
    }

    public function deleteAction(DeleteRapidUserDTO $context)
    {
        return $this->repository->delete(
            $context->getArray()["id"]
        );
    }

    public function createSessionAction(CreateRapidUserSessionDTO $context)
    {
        return $this->repository->createSession(
            new RapidProfileSessionEntity($context->getArray())
        );
    }

    public function updateSessionAction(UpdateRapidUserSessionDTO $context)
    {
        $rapid = $this->repository->show(
            $context->getArray()["id"]
        );
        $rapid->rapid_profile_id = $context->rapid_profile_id;
        return $this->repository->updateSession($rapid);
    }
}