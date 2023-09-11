<?php
namespace App\Core\IRepository;

use App\Core\DTO\RapidUser\Session\UpdateRapidUserSessionDTO;
use App\Core\Entityes\RapidProfiles\RapidProfileEntity;
use App\Core\Entityes\RapidProfiles\RapidProfileSessionEntity;

interface IRapidUserRepository
{
	public function create(RapidProfileEntity $rapid_profile);
	public function show(int $rapid_user_id);
	public function delete(int $rapid_user_id);
    // Session
	public function createSession(RapidProfileSessionEntity $rapid_profile_session);
	public function updateSession(RapidProfileSessionEntity $rapid_profile_session);
}