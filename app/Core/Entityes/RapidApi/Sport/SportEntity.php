<?php
namespace App\Core\Entityes\RapidApi\Sport;

use Illuminate\Database\Eloquent\Model;

class SportEntity extends Model
{
	protected $table = "sports";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'name', 
        'rapid_id'
    ];
}