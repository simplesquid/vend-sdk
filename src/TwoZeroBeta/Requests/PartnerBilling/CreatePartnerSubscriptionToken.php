<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreatePartnerSubscriptionToken extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/partner/billing/token';
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected array $payload = [],
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return $this->payload;
    }
}