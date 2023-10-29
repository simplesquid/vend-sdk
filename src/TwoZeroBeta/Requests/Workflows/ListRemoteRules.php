<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListRemoteRules extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/workflows/remote_rules';
    }
}
