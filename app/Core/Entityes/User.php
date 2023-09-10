<?php

namespace App\Core\Entityes;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'role', 
        'password'
    ];
}
