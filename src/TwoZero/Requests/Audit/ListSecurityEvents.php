<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Audit;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListSecurityEvents extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/security_events';
    }
}
