<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Contracts;

use Gridwb\LaravelAdapty\Contracts\Resources\ProfileContract;

interface ClientContract
{
    public function profile(): ProfileContract;
}
