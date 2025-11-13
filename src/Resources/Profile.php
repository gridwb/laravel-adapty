<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Resources;

use Gridwb\LaravelAdapty\Contracts\ApiClientContract;
use Gridwb\LaravelAdapty\Contracts\Resources\ProfileContract;
use Gridwb\LaravelAdapty\Resources\Concerns\IdentifierHeader;
use Gridwb\LaravelAdapty\Responses\Profile\ProfileResponse;
use GuzzleHttp\RequestOptions;
use Symfony\Component\HttpFoundation\Request;

readonly class Profile implements ProfileContract
{
    use IdentifierHeader;

    public function __construct(
        private ApiClientContract $apiClient,
    ) {}

    public function getProfile(?string $customerUserId = null, ?string $profileId = null): ProfileResponse
    {
        $response = $this->apiClient->request(
            Request::METHOD_GET,
            'api/v2/server-side-api/profile/',
            [
                RequestOptions::HEADERS => $this->identifierHeader($customerUserId, $profileId),
            ],
        );

        return ProfileResponse::fromResponse($response);
    }

    public function deleteProfile(?string $customerUserId = null, ?string $profileId = null): void
    {
        $this->apiClient->request(
            Request::METHOD_DELETE,
            'api/v2/server-side-api/profile/',
            [
                RequestOptions::HEADERS => $this->identifierHeader($customerUserId, $profileId),
            ],
        );
    }
}
