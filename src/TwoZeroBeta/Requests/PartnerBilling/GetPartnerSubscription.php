<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPartnerSubscription extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/partner/billing/subscriptions/{$this->partnerSubscriptionId}";
    }

    public function __construct(
        protected string $partnerSubscriptionId,
    ) {}
}
