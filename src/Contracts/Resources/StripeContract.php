<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Contracts\Resources;

use Gridwb\LaravelAdapty\Responses\Stripe\StripePurchaseResponse;
use GuzzleHttp\Exception\GuzzleException;

interface StripeContract
{
    /**
     * @throws GuzzleException
     *
     * @see https://adapty.io/docs/api-adapty/operations/validateStripePurchase
     */
    public function validateStripePurchase(array $data): StripePurchaseResponse;
}
