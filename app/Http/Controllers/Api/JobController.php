<?php

namespace App\Http\Controllers\Api;

use App\Domain\Service\LeagueListService;
use App\Http\Controllers\Controller;
use App\Jobs\LeagueListApiJob;

class JobController extends Controller
{
    public function index()
    {
        dispatch(new LeagueListApiJob());
        return 123;
    }
}
