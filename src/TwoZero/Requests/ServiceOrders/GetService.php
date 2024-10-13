<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetService extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/services/{$this->serviceId}";
    }

    public function __construct(
        protected string $serviceId,
    ) {}
}
