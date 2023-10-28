<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateUpdateRegisterSale
 *
 * Create or update a register sale. Returns a single new or updated sale object. See [Sales
 * Tutorials](/docs/sales_101) for usage information.
 *
 * **Note**: Promotions cannot be used with this
 * endpoint.
 */
class CreateUpdateRegisterSale extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/register_sales';
    }
}
