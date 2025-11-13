<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty;

use Gridwb\LaravelAdapty\Contracts\ApiClientContract;
use Gridwb\LaravelAdapty\Contracts\ClientContract;
use Gridwb\LaravelAdapty\Contracts\Resources\ProfileContract;
use Gridwb\LaravelAdapty\Resources\Profile;

readonly class Client implements ClientContract
{
    public function __construct(
        private ApiClientContract $apiClient,
    ) {}

    public function profile(): ProfileContract
    {
        return new Profile($this->apiClient);
    }
}
