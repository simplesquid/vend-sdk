<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductFamily
 *
 * Deletes a product family. The /all suffix is provided to delete an entire variant family.
 */
class DeleteProductFamily extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/all";
    }

    /**
     * @param  string  $productId The product id of a family member
     */
    public function __construct(
        protected string $productId,
    ) {
    }
}
