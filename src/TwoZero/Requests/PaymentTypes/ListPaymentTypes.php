<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PaymentTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListPaymentTypes extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/payment_types';
    }

    public function __construct(
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?bool $deleted = null,
        protected ?int $pageSize = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'deleted' => $this->deleted,
            'page_size' => $this->pageSize,
        ]);
    }
}
