<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class WebhookJob extends SpatieProcessWebhookJob
{
    public function handle()
    {
        logger('I was here');
        logger($this->webhookCall);
    }
    
}