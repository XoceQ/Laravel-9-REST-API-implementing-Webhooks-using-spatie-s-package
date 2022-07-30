<?php

return [
    'configs' => [
        [
            'name' => 'webhook-test',
            'signing_secret' => 'P4rqu3++2022',
            'signature_header_name' => 'Signature',
            'signature_validator' => \App\YourSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'process_webhook_job' => \App\Jobs\WebhookJob::class,
        ],

        [
            'name' => 'webhook-next',
            'signing_secret' => 'P4rqu3++2022',
            'signature_header_name' => 'Signature',
            'signature_validator' => \App\NextSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'process_webhook_job' => \App\Jobs\NextWebhookJob::class,
        ],

        [
            'name' => 'webhook-last',
            'signing_secret' => 'P4rqu3++2022',
            'signature_header_name' => 'Signature',
            'signature_validator' => \App\LastSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'process_webhook_job' => \App\Jobs\LastWebhookJob::class,
        ]

       
    ],
    
];
