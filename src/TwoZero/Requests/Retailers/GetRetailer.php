<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Retailers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRetailer extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/retailer';
    }
}