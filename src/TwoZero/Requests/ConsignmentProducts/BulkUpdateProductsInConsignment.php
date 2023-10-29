<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BulkUpdateProductsInConsignment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}/bulk";
    }

    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
