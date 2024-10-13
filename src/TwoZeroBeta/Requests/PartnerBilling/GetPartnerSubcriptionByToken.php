<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPartnerSubcriptionByToken extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/partner/billing/token/{$this->partnerSubscriptionToken}";
    }

    public function __construct(
        protected string $partnerSubscriptionToken,
    ) {}
}
