## Overview

Laravel Adapty is a convenient wrapper for interacting with the Adapty API in Laravel applications.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
    - [Profile Resource](#profile-resource)
    - [Webhooks](#webhooks)
- [Testing](#testing)
- [Changelog](#changelog)
- [License](#license)

## Installation

1. Install the package
    ```bash
    composer require gridwb/laravel-adapty
    ```

2. Publish the configuration file
    ```bash
    php artisan vendor:publish --tag="adapty-config"
    ```

3. Add environment variables
    ```env
    ADAPTY_API_URL=https://api.adapty.io
    ADAPTY_API_KEY=your-api-key-here
    ADAPTY_WEBHOOK_PATH=webhooks/adapty
    ADAPTY_WEBHOOK_SECRET=your-webhook-secret-here
    ```

## Usage

### `Profile` Resource

#### `get profile`

Get profile request:

```php
<?php

use Gridwb\LaravelAdapty\Facades\Adapty;

// Get profile by `customer_user_id`
$customerUserId = '<string>';
$profile = Adapty::profile()->getProfile(customerUserId: $customerUserId);

// Get profile by `profile_id`
$profileId = '<string>';
$profile = Adapty::profile()->getProfile(profileId: $profileId);
```

#### `delete profile`

Delete profile request:

```php
<?php

use Gridwb\LaravelAdapty\Facades\Adapty;

// Delete profile by `customer_user_id`
$customerUserId = '<string>';
Adapty::profile()->deleteProfile(customerUserId: $customerUserId);

// Delete profile by `profile_id`
$profileId = '<string>';
Adapty::profile()->deleteProfile(profileId: $profileId);
```

### `Webhooks`

Adapty can send events to your Laravel application via webhooks. By default, all webhook requests are dispatched to the
`Gridwb\LaravelAdapty\Jobs\ProcessWebhook::class` job, which triggers corresponding Laravel events. You can listen to
these events like any other Laravel event:

```php
<?php

use Gridwb\LaravelAdapty\Events\SubscriptionStarted;
use Illuminate\Support\Facades\Event;

Event::listen(SubscriptionStarted::class, function (SubscriptionStarted $event) {
    $payload = $event->payload;
    // Access data from Adapty payload
});
```

If you need custom handling, you can define your own job and set it in the `config/adapty.php`:

```php
<?php

return [
    'webhook' => [
        'process_webhook_job' => \Gridwb\LaravelAdapty\Jobs\ProcessWebhook::class,
    ],
];

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
