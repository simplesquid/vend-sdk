<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRegisterSale extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/register_sales/{$this->registerSaleId}";
    }

    public function __construct(
        protected string $registerSaleId,
    ) {}
}
