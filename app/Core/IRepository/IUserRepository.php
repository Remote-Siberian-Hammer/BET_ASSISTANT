<?php

namespace App\Core\IRepository;

use App\Core\Entityes\User;

interface IUserRepository
{
    public function create(User $user);
    public function findByEmail(string $email);
}
