<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetConsignmentById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}";
    }

    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
