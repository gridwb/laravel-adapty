<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses\Profile;

use Gridwb\LaravelAdapty\Responses\AbstractResponse;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;

class ProfileResponse extends AbstractResponse
{
    /**
     * @param  Collection<int, ProfileResponseCustomAttribute>  $customAttributes
     * @param  Collection<int, ProfileResponseAccessLevel>|null  $accessLevels
     * @param  Collection<int, ProfileResponseSubscription>|null  $subscriptions
     * @param  Collection<int, ProfileResponseNonSubscription>|null  $nonSubscriptions
     */
    public function __construct(
        #[MapInputName('app_id')]
        #[MapOutputName('app_id')]
        public string $appId,
        #[MapInputName('profile_id')]
        #[MapOutputName('profile_id')]
        public string $profileId,
        #[MapInputName('customer_user_id')]
        #[MapOutputName('customer_user_id')]
        public ?string $customerUserId,
        #[MapInputName('total_revenue_usd')]
        #[MapOutputName('total_revenue_usd')]
        public float $totalRevenueUsd,
        #[MapInputName('segment_hash')]
        #[MapOutputName('segment_hash')]
        public string $segmentHash,
        public int $timestamp,
        #[MapInputName('custom_attributes')]
        #[MapOutputName('custom_attributes')]
        #[DataCollectionOf(ProfileResponseCustomAttribute::class)]
        public Collection $customAttributes,
        #[MapInputName('access_levels')]
        #[MapOutputName('access_levels')]
        #[DataCollectionOf(ProfileResponseAccessLevel::class)]
        public ?Collection $accessLevels = null,
        #[MapInputName('subscriptions')]
        #[MapOutputName('subscriptions')]
        #[DataCollectionOf(ProfileResponseSubscription::class)]
        public ?Collection $subscriptions = null,
        #[MapInputName('non_subscriptions')]
        #[MapOutputName('non_subscriptions')]
        #[DataCollectionOf(ProfileResponseNonSubscription::class)]
        public ?Collection $nonSubscriptions = null,
    ) {}
}
