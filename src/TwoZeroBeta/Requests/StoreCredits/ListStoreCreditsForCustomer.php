<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListStoreCreditsForCustomer extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/store_credits/{$this->customerId}";
    }

    public function __construct(
        protected string $customerId,
        protected ?string $includes = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'includes[]' => $this->includes,
        ]);
    }
}
