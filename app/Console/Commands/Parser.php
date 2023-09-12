<?php

namespace App\Console\Commands;

use App\Console\Parser\ParserObserverService;
use App\Services\ParserService;
use Illuminate\Console\Command;

class Parser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
    }
}
