<?php
namespace App\Core\IServices;


use App\Core\DTO\RapidUser\CreateRapidUserDTO;
use App\Core\DTO\RapidUser\ShowRapidUserDTO;
use App\Core\DTO\RapidUser\DeleteRapidUserDTO;
use App\Core\DTO\RapidUser\Session\CreateRapidUserSessionDTO;
use App\Core\DTO\RapidUser\Session\UpdateRapidUserSessionDTO;

interface IRapidUserService
{
	public function createAction(CreateRapidUserDTO $context);
	public function showAction(ShowRapidUserDTO $context);
	public function deleteAction(DeleteRapidUserDTO $context);
    // Session
    public function createSessionAction(CreateRapidUserSessionDTO $context);
    public function showSessionAction();
    public function allSessionAction();
    public function updateSessionAction(UpdateRapidUserSessionDTO $context);
}