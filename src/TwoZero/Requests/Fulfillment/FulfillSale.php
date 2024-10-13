<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Fulfillment;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class FulfillSale extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->saleId}/fulfill";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $saleId,
        protected array $payload = [],
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}
