<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\PaymentTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListPaymentTypes
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * non-paginated list of payment types.
 */
class ListPaymentTypes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/payment_types';
    }
}
