<?php

namespace App\Jobs;

use App\Domain\Service\EmailService;
use App\DTO\Mail\SendResetToPasswordUserDTO;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SendResetToPasswordUserMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected SendResetToPasswordUserDTO $emailContext;
    /**
     * Create a new job instance.
     */
    public function __construct($emailContext)
    {
        $this->emailContext = $emailContext;
    }

    /**
     * Execute the job.
     */
    public function handle(EmailService $emailService): void
    {
        $emailService->SendResetToPasswordUserService($this->emailContext);
    }
}
