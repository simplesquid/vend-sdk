<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListCustomerGroups extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/customer_groups';
    }

    public function __construct(
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'page_size' => $this->pageSize, 'deleted' => $this->deleted]);
    }
}
