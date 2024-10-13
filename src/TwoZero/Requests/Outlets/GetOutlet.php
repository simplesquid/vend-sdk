<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Outlets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetOutlet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/outlets/{$this->outletId}";
    }

    public function __construct(
        protected string $outletId,
    ) {}
}
