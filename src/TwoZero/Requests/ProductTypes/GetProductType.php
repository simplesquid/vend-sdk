<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProductType extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/product_types/{$this->productTypeId}";
    }

    public function __construct(
        protected string $productTypeId,
    ) {
    }
}
