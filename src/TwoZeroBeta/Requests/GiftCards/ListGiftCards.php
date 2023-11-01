<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\GiftCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListGiftCards extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/gift_cards';
    }

    public function __construct(
        protected ?string $after = null,
        protected ?string $before = null,
        protected ?int $pageSize = null,
        protected ?string $cardNumber = null,
        protected ?string $status = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'card_number' => $this->cardNumber,
            'status' => $this->status,
        ]);
    }
}
