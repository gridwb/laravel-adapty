<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty;

use Gridwb\LaravelAdapty\Contracts\ApiClientContract;
use Gridwb\LaravelAdapty\Contracts\ClientContract;
use Gridwb\LaravelAdapty\Contracts\Resources\ProfileContract;
use Gridwb\LaravelAdapty\Contracts\Resources\StripeContract;
use Gridwb\LaravelAdapty\Resources\Profile;
use Gridwb\LaravelAdapty\Resources\Stripe;

readonly class Client implements ClientContract
{
    public function __construct(
        private ApiClientContract $apiClient,
    ) {}

    public function profile(): ProfileContract
    {
        return new Profile($this->apiClient);
    }

    public function stripe(): StripeContract
    {
        return new Stripe($this->apiClient);
    }
}
