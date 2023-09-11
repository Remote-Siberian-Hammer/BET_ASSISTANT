<?php
namespace App\Core\Entityes\RapidProfiles;

use Illuminate\Database\Eloquent\Model;

class RapidProfileSessionEntity extends Model
{
	protected $table = "rapid_sessions";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'rapid_profile_id'
    ];
}