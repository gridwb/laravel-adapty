<?php

declare(strict_types=1);

namespace Gridwb\LaravelAdapty\Responses\Profile;

use Gridwb\LaravelAdapty\Responses\AbstractResponse;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;

class ProfileResponseNonSubscription extends AbstractResponse
{
    public function __construct(
        #[MapInputName('purchase_id')]
        #[MapOutputName('purchase_id')]
        public string $purchaseId,
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
        #[MapInputName('purchased_at')]
        #[MapOutputName('purchased_at')]
        public string $purchasedAt,
        public string $environment,
        #[MapInputName('is_refund')]
        #[MapOutputName('is_refund')]
        public bool $isRefund,
        #[MapInputName('is_consumable')]
        #[MapOutputName('is_consumable')]
        public bool $isConsumable,
    ) {}
}
