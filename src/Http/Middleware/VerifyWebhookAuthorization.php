<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

readonly class VerifyWebhookAuthorization
{
    public function handle(Request $request, Closure $next): Response
    {
        $this->verify($request);

        return $next($request);
    }

    private function verify(Request $request): void
    {
        $token = $request->bearerToken();

        if (empty($token)) {
            throw new AuthorizationException('Webhook token is not provided.');
        }

        /** @var string|null $secret */
        $secret = Config::get('adapty.webhook.secret');

        if (empty($secret)) {
            throw new AuthorizationException('Webhook secret is not configured.');
        }

        if (! hash_equals($secret, $token)) {
            throw new AuthorizationException('Invalid webhook authorization.');
        }
    }
}
