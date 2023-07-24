<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'SportId',
        'SectionId',
        'CountryLeaguesId',
        'Name',
        'TeamHome',
        'TH_Current',
        'TH_Display',
        'TH_Period_1',
        'TH_Period_2',
        'TH_NormaiTime',
        'TeamAway',
        'TA_Current',
        'TA_Display',
        'TA_Period_1',
        'TA_Period_2',
        'Slug',
        'Live',
    ];
}
