<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetOutletServicesAgenda extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/services_agenda/outlet/{$this->outletId}";
    }

    public function __construct(
        protected string $outletId,
    ) {
    }
}
