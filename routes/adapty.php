<?php

use Gridwb\LaravelAdapty\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::middleware(Config::get('adapty.webhook.middleware'))
    ->post(Config::get('adapty.webhook.path'), WebhookController::class);
