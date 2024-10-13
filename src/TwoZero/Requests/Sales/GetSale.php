<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Sales;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSale extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->saleId}";
    }

    public function __construct(
        protected string $saleId,
    ) {}
}
