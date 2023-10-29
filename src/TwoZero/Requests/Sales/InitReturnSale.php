<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Sales;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class InitReturnSale extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->saleId}/actions/return";
    }

    public function __construct(
        protected string $saleId,
    ) {
    }
}
