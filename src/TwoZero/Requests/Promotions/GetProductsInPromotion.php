<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProductsInPromotion extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/promotions/{$this->promotionId}/products";
    }

    public function __construct(
        protected string $promotionId,
    ) {
    }
}
