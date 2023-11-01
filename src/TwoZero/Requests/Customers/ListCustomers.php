<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListCustomers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/customers';
    }

    public function __construct(
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'deleted' => $this->deleted,
        ]);
    }
}
