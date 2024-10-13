<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ReverseGiftCardTransaction extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/gift_cards/transactions/{$this->transactionId}";
    }

    public function __construct(
        protected string $transactionId,
    ) {}
}
