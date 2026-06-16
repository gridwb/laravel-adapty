<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses\Stripe;

use Gridwb\LaravelAdapty\Responses\AbstractResponse;

class StripePurchaseResponse extends AbstractResponse
{
    public function __construct(
        public null $data,
    ) {}
}
