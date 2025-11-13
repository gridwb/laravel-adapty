## Overview

Laravel Adapty is a convenient wrapper for interacting with the Adapty API in Laravel applications.

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
    ```bash
    ADAPTY_API_URL=https://api.adapty.io
    ADAPTY_API_KEY=your-api-key-here
    ```

## Usage

Get profile

```php
<?php

use Gridwb\LaravelAdapty\Facades\Adapty;

// Get profile by `customer_user_id`
$customerUserId = 'abc123';
$profile = Adapty::profile()->getProfile(customerUserId: $customerUserId);

// Get profile by `profile_id`
$profileId = 'abc123';
$profile = Adapty::profile()->getProfile(profileId: $profileId);

```

Delete profile

```php
<?php

use Gridwb\LaravelAdapty\Facades\Adapty;

// Delete profile by `customer_user_id`
$customerUserId = 'abc123';
Adapty::profile()->deleteProfile(customerUserId: $customerUserId);

// Delete profile by `profile_id`
$profileId = 'abc123';
Adapty::profile()->deleteProfile(profileId: $profileId);

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
