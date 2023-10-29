<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPromotionById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/promotions/{$this->promotionId}";
    }

    public function __construct(
        protected string $promotionId,
    ) {
    }
}
