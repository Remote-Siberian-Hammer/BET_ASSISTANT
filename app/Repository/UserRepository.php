<?php

namespace App\Repository;

use App\Core\Entityes\AuthUserEntityes;
use App\Core\Entityes\User;
use App\Core\IRepository\IUserRepository;

class UserRepository implements IUserRepository
{
    public function create(User $user)
    {
        return $user->save();
    }

    public function findByEmail(string $email): ?AuthUserEntityes
    {
        return AuthUserEntityes::where('email', $email)->first();
    }
}
