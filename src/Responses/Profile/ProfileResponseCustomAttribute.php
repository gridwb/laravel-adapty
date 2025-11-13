<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses\Profile;

use Gridwb\LaravelAdapty\Responses\AbstractResponse;

class ProfileResponseCustomAttribute extends AbstractResponse
{
    public function __construct(
        public string $key,
        public string|int $value,
    ) {}
}
