<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use App\Models\Licens;
class SendLicensEmailJobs implements ShouldQueue
{
    use Queueable,Dispatchable;
    public $licens;

    /**
     * Create a new job instance.
     */
    public function __construct(Licens $licens)
    {
        $this->licens = $licens;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         Log::info('License Key Sent', [
            'license_id' => $this->licens->id,
            'key' => $this->licens->key,
            'user_id' => $this->licens->user_id
        ]);
    }
}
