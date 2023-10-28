<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Taxes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateTax
 *
 * Creates a new tax.
 */
class CreateTax extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/taxes';
    }
}
