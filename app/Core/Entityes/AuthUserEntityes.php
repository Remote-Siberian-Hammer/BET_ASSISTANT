<?php

namespace App\Core\Entityes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthUserEntityes extends Authenticatable
{
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
