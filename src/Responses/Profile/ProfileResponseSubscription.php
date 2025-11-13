<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses\Profile;

use Gridwb\LaravelAdapty\Responses\AbstractResponse;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;

class ProfileResponseSubscription extends AbstractResponse
{
    public function __construct(
        public string $store,
        #[MapInputName('store_product_id')]
        #[MapOutputName('store_product_id')]
        public string $storeProductId,
        #[MapInputName('store_base_plan_id')]
        #[MapOutputName('store_base_plan_id')]
        public ?string $storeBasePlanId,
        #[MapInputName('store_transaction_id')]
        #[MapOutputName('store_transaction_id')]
        public string $storeTransactionId,
        #[MapInputName('store_original_transaction_id')]
        #[MapOutputName('store_original_transaction_id')]
        public string $storeOriginalTransactionId,
        public string $environment,
        #[MapInputName('purchased_at')]
        #[MapOutputName('purchased_at')]
        public string $purchasedAt,
        #[MapInputName('originally_purchased_at')]
        #[MapOutputName('originally_purchased_at')]
        public string $originallyPurchasedAt,
        #[MapInputName('expires_at')]
        #[MapOutputName('expires_at')]
        public ?string $expiresAt,
        #[MapInputName('renewal_cancelled_at')]
        #[MapOutputName('renewal_cancelled_at')]
        public ?string $renewalCancelledAt,
        #[MapInputName('billing_issue_detected_at')]
        #[MapOutputName('billing_issue_detected_at')]
        public ?string $billingIssueDetectedAt,
        #[MapInputName('is_in_grace_period')]
        #[MapOutputName('is_in_grace_period')]
        public bool $isInGracePeriod,
        public ProfileResponseSubscriptionOffer|string|null $offer = null,
        #[MapInputName('cancellation_reason')]
        #[MapOutputName('cancellation_reason')]
        public ?string $cancellationReason = null,
    ) {}
}
