<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteConsignmentById extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}";
    }

    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
