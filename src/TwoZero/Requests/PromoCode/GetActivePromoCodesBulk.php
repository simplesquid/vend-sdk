<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PromoCode;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class GetActivePromoCodesBulk extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/promocode/bulk/active';
    }
}
