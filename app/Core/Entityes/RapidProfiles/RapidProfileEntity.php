<?php
namespace App\Core\Entityes\RapidProfiles;

use Illuminate\Database\Eloquent\Model;

class RapidProfileEntity extends Model
{
	protected $table = "rapid_profiles";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'type',
        'host',
        'access_key',
        'facts_count',
        'count',
        'activation_facts'
    ];
}