<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateCustomerGroup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/customer_groups/{$this->customerGroupId}";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $customerGroupId,
        protected array $payload = [],
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}
