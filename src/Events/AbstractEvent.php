<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Events;

abstract readonly class AbstractEvent
{
    /**
     * @see https://adapty.io/docs/webhook-event-types-and-fields#webhook-event-structure
     *
     * @var array<string, mixed>
     */
    public array $payload;

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
