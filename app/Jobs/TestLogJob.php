<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TestLogJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $job_listing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger("From Test Log Job: {$this->job_listing->title}");
    }
}
