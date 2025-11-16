<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Enums;

enum Environment: string
{
    case SANDBOX = 'Sandbox';
    case PRODUCTION = 'Production';
}
