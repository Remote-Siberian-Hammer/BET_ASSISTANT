<?php
namespace App\Core\Entityes\RapidApi\Section;

use Illuminate\Database\Eloquent\Model;

class SectionEntity extends Model
{
	protected $table = "sections";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
        'sport_id', 
        'rapid_sport_id', 
        'slug', 
        'flag', 
        'name', 
        'name_ru',
        'name_en',
        'name_de',
        'name_fr'
    ];
}