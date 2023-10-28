<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateUpdateSupplier
 *
 * Returns a single supplier object.
 */
class CreateUpdateSupplier extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/supplier';
    }
}
