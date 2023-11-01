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

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $promotionId,
        protected array $payload = [],
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}
