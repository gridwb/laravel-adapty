<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Contracts\Resources;

use Gridwb\LaravelAdapty\Responses\Profile\ProfileResponse;
use GuzzleHttp\Exception\GuzzleException;

interface ProfileContract
{
    /**
     * @throws GuzzleException
     *
     * @see https://adapty.io/docs/api-adapty#/operations/getProfile
     */
    public function getProfile(?string $customerUserId = null, ?string $profileId = null): ProfileResponse;

    /**
     * @throws GuzzleException
     *
     * @see https://adapty.io/docs/api-adapty#/operations/deleteProfile
     */
    public function deleteProfile(?string $customerUserId = null, ?string $profileId = null): void;
}
