<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Facades;

use Gridwb\LaravelAdapty\Contracts\Resources\ProfileContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static ProfileContract profile()
 */
final class Adapty extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'adapty';
    }
}
