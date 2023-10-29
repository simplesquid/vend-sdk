<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteSupplier extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/supplier/{$this->supplierId}";
    }

    public function __construct(
        protected string $supplierId,
    ) {
    }
}
