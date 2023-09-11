<?php
namespace App\Repository;

use App\Core\IRepository\IRapidUserRepository;
use App\Core\Entityes\RapidProfiles\RapidProfileEntity;
use App\Core\Entityes\RapidProfiles\RapidProfileSessionEntity;

class RapidUserRepository implements IRapidUserRepository
{
	public function create(RapidProfileEntity $rapid_profile)
    {
        return $rapid_profile->save();
    }

	public function show(int $rapid_user_id)
    {
        return RapidProfileEntity::where('id', $rapid_user_id)->first();
    }

    public function all()
    {
        return RapidProfileEntity::get();
    }

	public function delete(int $rapid_user_id)
    {
        $rapidProfile = RapidProfileEntity::where('id', $rapid_user_id);
        $rapidProfile->delete();
        return $rapidProfile;
    }

    public function createSession(RapidProfileSessionEntity $rapid_profile_session)
    {
        return $rapid_profile_session->save();
    }

	public function updateSession(RapidProfileSessionEntity $rapid_profile_session)
    {
        return $rapid_profile_session->save();
    }
}