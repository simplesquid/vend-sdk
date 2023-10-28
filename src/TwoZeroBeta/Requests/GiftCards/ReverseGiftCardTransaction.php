<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ReverseGiftCardTransaction
 *
 * Reverse the given transction on the gift card. If the transaction is successful a new transaction
 * will be added to the gift card transactions with the status "REVERSING".
 */
class ReverseGiftCardTransaction extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/gift_cards/transactions/{$this->transactionId}";
    }

    /**
     * @param  string  $transactionId The transaction id to be reversed for the gift card.
     */
    public function __construct(
        protected string $transactionId,
    ) {
    }
}
