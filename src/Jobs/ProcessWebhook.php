<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Jobs;

use Gridwb\LaravelAdapty\Events\AbstractEvent;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;

class ProcessWebhook
{
    /**
     * @see https://adapty.io/docs/webhook-event-types-and-fields#webhook-event-structure
     *
     * @var array<string, mixed>
     */
    private array $payload;

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public function handle(): void
    {
        /** @var string|null $eventType */
        $eventType = Arr::get($this->payload, 'event_type');

        /** @var array<string, class-string<AbstractEvent>> $events */
        $events = Config::get('adapty.webhook.events', []);

        /** @var class-string<AbstractEvent>|null $event */
        $event = $events[$eventType] ?? null;

        if ($event) {
            event(new $event($this->payload));
        }
    }
}
