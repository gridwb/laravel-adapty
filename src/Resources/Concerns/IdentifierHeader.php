<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Resources\Concerns;

use InvalidArgumentException;

trait IdentifierHeader
{
    /**
     * @return array<string, string>
     */
    private function identifierHeader(?string $customerUserId = null, ?string $profileId = null): array
    {
        if ($customerUserId) {
            return ['adapty-customer-user-id' => $customerUserId];
        }

        if ($profileId) {
            return ['adapty-profile-id' => $profileId];
        }

        throw new InvalidArgumentException('Customer user id or profile id is required.');
    }
}
