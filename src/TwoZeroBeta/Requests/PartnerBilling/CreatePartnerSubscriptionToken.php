<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreatePartnerSubscriptionToken extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/partner/billing/token';
    }
}
