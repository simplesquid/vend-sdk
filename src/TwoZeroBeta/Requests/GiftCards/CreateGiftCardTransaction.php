<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateGiftCardTransaction extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/gift_cards/{$this->number}/transactions";
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function __construct(
        protected string $number,
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