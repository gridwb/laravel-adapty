<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses;

use Illuminate\Support\Arr;
use JsonException;
use Psr\Http\Message\ResponseInterface;
use Spatie\LaravelData\Data;

abstract class AbstractResponse extends Data
{
    /**
     * @throws JsonException
     */
    public static function fromResponse(ResponseInterface $response): static
    {
        try {
            $data = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            $data = [];
        }

        if (! is_array($data)) {
            $data = [];
        }

        return static::from(Arr::get($data, 'data', []));
    }
}
