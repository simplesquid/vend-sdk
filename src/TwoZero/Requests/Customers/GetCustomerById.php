<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCustomerById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->customerId}";
    }

    public function __construct(
        protected string $customerId,
    ) {
    }
}
