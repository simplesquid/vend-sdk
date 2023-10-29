<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class SetImagePosition extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/product_images/{$this->productImageId}";
    }

    public function __construct(
        protected string $productImageId,
    ) {
    }
}
