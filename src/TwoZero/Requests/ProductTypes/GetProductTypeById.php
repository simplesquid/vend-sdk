<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetProductTypeByID
 *
 * Returns a single product type with a given ID.
 */
class GetProductTypeById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product_types/{$this->productTypeId}";
    }

    /**
     * @param  string  $productTypeId The product type id
     */
    public function __construct(
        protected string $productTypeId,
    ) {
    }
}
