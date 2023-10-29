<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListRules extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/workflows/rules';
    }
}
