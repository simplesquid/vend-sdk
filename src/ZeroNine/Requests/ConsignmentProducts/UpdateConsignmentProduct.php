<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateConsignmentProduct
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Updates an
 * existing consignment product.
 */
class UpdateConsignmentProduct extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/consignment_product/{$this->consignmentProductId}";
    }

    /**
     * @param  string  $consignmentProductId The ID of the consignment to be updated.
     */
    public function __construct(
        protected string $consignmentProductId,
    ) {
    }
}
