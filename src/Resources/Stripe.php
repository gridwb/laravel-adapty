<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Resources;

use Gridwb\LaravelAdapty\Contracts\ApiClientContract;
use Gridwb\LaravelAdapty\Contracts\Resources\StripeContract;
use Gridwb\LaravelAdapty\Resources\Concerns\IdentifierHeader;
use Gridwb\LaravelAdapty\Responses\Stripe\StripePurchaseResponse;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use JsonException;
use Symfony\Component\HttpFoundation\Request;

readonly class Stripe implements StripeContract
{
    use IdentifierHeader;

    public function __construct(
        private ApiClientContract $apiClient,
    ) {}

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function validateStripePurchase(array $data): StripePurchaseResponse
    {
        $response = $this->apiClient->request(
            Request::METHOD_POST,
            'api/v1/sdk/purchase/stripe/token/validate/',
            [
                RequestOptions::HEADERS => [
                    'Content-Type' => 'application/vnd.api+json',
                ],
                RequestOptions::BODY => json_encode(
                    [
                        'data' => $data,
                    ],
                    JSON_THROW_ON_ERROR
                ),
            ],
        );

        return StripePurchaseResponse::fromResponse($response);
    }
}
