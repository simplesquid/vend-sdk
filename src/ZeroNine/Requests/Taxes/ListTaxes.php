<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Taxes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListTaxes
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * non-paginated list of taxes.
 */
class ListTaxes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/taxes';
    }
}
