<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class GetInventoryForProduct extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/inventory";
    }

    public function __construct(
        protected string $productId,
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
