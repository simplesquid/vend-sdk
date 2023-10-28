<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductFromConsignment
 *
 * Removes the specific product from the consignment.
 */
class DeleteProductFromConsignment extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}/products/{$this->productId}";
    }

    /**
     * @param  string  $consignmentId The consignment id to be updated.
     * @param  string  $productId The product id of the product to be added to the consignment.
     */
    public function __construct(
        protected string $consignmentId,
        protected string $productId,
    ) {
    }
}
