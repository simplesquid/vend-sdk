<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteConsignmentProduct
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Deletes an item
 * from the consignment.
 */
class DeleteConsignmentProduct extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/consignment_product/{$this->consignmentProductId}";
    }

    /**
     * @param  string  $consignmentProductId The ID of the consignment product to be deleted.
     */
    public function __construct(
        protected string $consignmentProductId,
    ) {
    }
}
