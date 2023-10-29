<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListConsignmentTotals extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}/totals";
    }

    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
