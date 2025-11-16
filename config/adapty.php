<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Adapty API url
    |--------------------------------------------------------------------------
    */

    'api_url' => env('ADAPTY_API_URL', 'https://api.adapty.io'),

    /*
    |--------------------------------------------------------------------------
    | Adapty API key
    |--------------------------------------------------------------------------
    */

    'api_key' => env('ADAPTY_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Adapty Webhook
    |--------------------------------------------------------------------------
    |
    | @see https://adapty.io/docs/webhook
    |
    */

    'webhook' => [
        /*
        |--------------------------------------------------------------------------
        | Webhook Path
        |--------------------------------------------------------------------------
        |
        | The URI path where Adapty will send webhook POST requests.
        |
        */

        'path' => env('ADAPTY_WEBHOOK_PATH', 'webhooks/adapty'),

        /*
        |--------------------------------------------------------------------------
        | Webhook Secret
        |--------------------------------------------------------------------------
        |
        | A secret token used to verify incoming webhook requests.
        |
        */

        'secret' => env('ADAPTY_WEBHOOK_SECRET'),

        /*
        |--------------------------------------------------------------------------
        | Middleware
        |--------------------------------------------------------------------------
        |
        | Optional middleware to run before processing the webhook.
        |
        */

        'middleware' => [
            \Gridwb\LaravelAdapty\Http\Middleware\VerifyWebhookAuthorization::class,
        ],

        /*
        |--------------------------------------------------------------------------
        | Webhook Processing Job
        |--------------------------------------------------------------------------
        |
        | The job class that handles processing of incoming webhook payloads.
        | The class must extend Gridwb\LaravelAdapty\Jobs\ProcessWebhook.
        |
        */

        'process_webhook_job' => \Gridwb\LaravelAdapty\Jobs\ProcessWebhook::class,

        /*
        |--------------------------------------------------------------------------
        | Event Mapping
        |--------------------------------------------------------------------------
        |
        | Map Adapty webhook "event_type" values to Laravel event classes.
        | @see https://adapty.io/docs/webhook-event-types-and-fields#webhook-event-structure
        | Each class must extend \Gridwb\LaravelAdapty\Events\AbstractEvent.
        |
        */

        'events' => [
            'subscription_started' => \Gridwb\LaravelAdapty\Events\SubscriptionStarted::class,
            'subscription_renewed' => \Gridwb\LaravelAdapty\Events\SubscriptionRenewed::class,
            'subscription_renewal_cancelled' => \Gridwb\LaravelAdapty\Events\SubscriptionRenewalCancelled::class,
            'subscription_renewal_reactivated' => \Gridwb\LaravelAdapty\Events\SubscriptionRenewalReactivated::class,
            'subscription_expired' => \Gridwb\LaravelAdapty\Events\SubscriptionExpired::class,
            'subscription_paused' => \Gridwb\LaravelAdapty\Events\SubscriptionPaused::class,
            'subscription_deferred' => \Gridwb\LaravelAdapty\Events\SubscriptionDeferred::class,
            'non_subscription_purchase' => \Gridwb\LaravelAdapty\Events\NonSubscriptionPurchase::class,
            'trial_started' => \Gridwb\LaravelAdapty\Events\TrialStarted::class,
            'trial_converted' => \Gridwb\LaravelAdapty\Events\TrialConverted::class,
            'trial_renewal_cancelled' => \Gridwb\LaravelAdapty\Events\TrialRenewalCancelled::class,
            'trial_renewal_reactivated' => \Gridwb\LaravelAdapty\Events\TrialRenewalReactivated::class,
            'trial_expired' => \Gridwb\LaravelAdapty\Events\TrialExpired::class,
            'entered_grace_period' => \Gridwb\LaravelAdapty\Events\EnteredGracePeriod::class,
            'billing_issue_detected' => \Gridwb\LaravelAdapty\Events\BillingIssueDetected::class,
            'subscription_refunded' => \Gridwb\LaravelAdapty\Events\SubscriptionRefunded::class,
            'non_subscription_purchase_refunded' => \Gridwb\LaravelAdapty\Events\NonSubscriptionPurchaseRefunded::class,
            'access_level_updated' => \Gridwb\LaravelAdapty\Events\AccessLevelUpdated::class,
        ],
    ],

];
