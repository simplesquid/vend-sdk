<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateStoreCreditTransaction extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/store_credits/{$this->customerId}/transactions";
    }

    public function __construct(
        protected string $customerId,
    ) {
    }
}
