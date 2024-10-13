<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class FindGiftCard extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/gift_cards/{$this->number}";
    }

    public function __construct(
        protected string $number,
    ) {}
}
