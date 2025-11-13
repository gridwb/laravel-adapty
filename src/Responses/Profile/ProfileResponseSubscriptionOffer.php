<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses\Profile;

use Gridwb\LaravelAdapty\Responses\AbstractResponse;

class ProfileResponseSubscriptionOffer extends AbstractResponse
{
    public function __construct(
        public ?string $category = null,
        public ?string $type = null,
        public ?string $id = null,
    ) {}
}
