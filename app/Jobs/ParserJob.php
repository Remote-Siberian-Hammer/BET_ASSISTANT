<?php

namespace App\Jobs;

use App\Console\Parser\ParserObserverService;
use App\Services\RapidFootballOneParserService;
use App\Services\RapidUserService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ParserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $service = new RapidFootballOneParserService();
        $service->getSportAction(new ParserObserverService(), new RapidUserService());
    }
}
