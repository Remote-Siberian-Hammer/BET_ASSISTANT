<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountRapid extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Email',
        'SportScoreTocken',
        'TextTranslatorTocken',
        'SportScoreCountQuery',
        'TextTranslatorQuery',
        'TextTranslatorCountChar'
    ];
}
