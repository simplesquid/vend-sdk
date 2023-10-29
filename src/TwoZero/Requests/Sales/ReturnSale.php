<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Sales;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ReturnSale extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->id}/actions/return";
    }

    public function __construct(
        protected string $id,
    ) {
    }
}
