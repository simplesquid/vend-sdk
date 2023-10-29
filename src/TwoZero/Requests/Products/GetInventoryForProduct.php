<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetInventoryForProduct extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/inventory";
    }

    public function __construct(
        protected string $productId,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
