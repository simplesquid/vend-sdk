<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateGiftCard
 *
 * Creates and activates a new gift card. The gift card will be created with one transaction with
 * status "ACTIVATION" which contains the initial balance of the gift card.
 */
class CreateGiftCard extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/gift_cards';
    }
}
