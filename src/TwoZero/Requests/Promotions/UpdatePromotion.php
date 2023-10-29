<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdatePromotion extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/promotions/{$this->promotionId}";
    }

    public function __construct(
        protected string $promotionId,
    ) {
    }
}
