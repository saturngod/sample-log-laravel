<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Logs;

class ProcessLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $channel;
    private $type;
    public $text;
    public function __construct($channel,$type,$text)
    {
        $this->channel = $channel;
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $log = Logs::create([
            'channel' => $this->channel,
            'type' => $this->type,
            'text' => $this->text,
        ]);
        $log->save();

    }
}
