<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PartnerSubscription
 *
 * Returns a specific partner subscription of the retailer
 */
class PartnerSubscription extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/partner/billing/subscriptions/{$this->subscriptionId}";
    }

    public function __construct(
        protected string $subscriptionId,
    ) {
    }
}
