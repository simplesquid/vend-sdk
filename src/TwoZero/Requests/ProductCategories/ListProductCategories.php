<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListProductCategories extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/product_categories';
    }

    public function __construct(
        protected ?string $parent = null,
        protected ?string $include = null,
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'parent' => $this->parent,
            'include' => $this->include,
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
