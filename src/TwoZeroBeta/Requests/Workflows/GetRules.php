<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-rules
 *
 * Returns the business rules for the retailer.
 */
class GetRules extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/workflows/rules';
    }
}
