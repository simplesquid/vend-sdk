<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Outlets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListOutlets
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * non-paginated list of outlets.
 */
class ListOutlets extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/outlets';
    }
}
