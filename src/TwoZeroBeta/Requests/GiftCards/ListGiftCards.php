<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListGiftCards
 *
 * Returns a paginated list of gift cards.
 */
class ListGiftCards extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/gift_cards';
    }

    /**
     * @param  null|string  $before The upper limit for the ID to be included in the response.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response. NOTE: 200 is the maximum value of the page_size parameter.
     * @param  null|string  $cardNumber Find by gift card number.
     * @param  null|string  $status Filter by gift card status.
     */
    public function __construct(
        protected ?string $before = null,
        protected ?int $pageSize = null,
        protected ?string $cardNumber = null,
        protected ?string $status = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'card_number' => $this->cardNumber,
            'status' => $this->status,
        ]);
    }
}
