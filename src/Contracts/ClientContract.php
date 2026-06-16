<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Contracts;

use Gridwb\LaravelAdapty\Contracts\Resources\ProfileContract;
use Gridwb\LaravelAdapty\Contracts\Resources\StripeContract;

interface ClientContract
{
    public function profile(): ProfileContract;

    public function stripe(): StripeContract;
}
