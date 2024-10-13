<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Fulfillment;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListSaleFulfillments extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->saleId}/fulfillments";
    }

    public function __construct(
        protected string $saleId,
    ) {}
}
