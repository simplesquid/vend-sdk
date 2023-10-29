<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class StoreCreditReport extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/store_credits/report';
    }
}
