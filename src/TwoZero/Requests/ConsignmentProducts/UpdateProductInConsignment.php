<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateProductInConsignment extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}/products/{$this->productId}";
    }

    public function __construct(
        protected string $consignmentId,
        protected string $productId,
    ) {
    }
}
