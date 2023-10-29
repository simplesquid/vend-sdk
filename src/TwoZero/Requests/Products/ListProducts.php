<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListProducts extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products';
    }

    public function __construct(
        protected ?int $before = null,
        protected ?bool $deleted = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'deleted' => $this->deleted, 'page_size' => $this->pageSize]);
    }
}
