<?php

namespace App\Jobs;

use App\Services\WordService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateNewWord implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $name;

    public $categoryName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $name, string $categoryName)
    {
        $this->name = $name;
        $this->categoryName = $categoryName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        (new WordService)->createWord($this->name, $this->categoryName);
    }
}
