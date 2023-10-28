<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * FindGiftCardByTransactionId
 *
 * Finds and returns the card associated with the given transaction id. Returns a 404 if the gift card
 * with the given transaction id was not found.
 */
class FindGiftCardByTransactionId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/gift_cards/transactions/{$this->transactionId}";
    }

    /**
     * @param  string  $transactionId The transaction id of the gift card transaction to find.
     */
    public function __construct(
        protected string $transactionId,
    ) {
    }
}
