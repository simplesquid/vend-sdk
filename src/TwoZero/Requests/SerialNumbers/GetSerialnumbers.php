<?php

namespace SimpleSquid\Vend\TwoZero\Requests\SerialNumbers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSerialnumbers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/serialnumbers';
    }

    public function __construct(
        protected ?string $productId = null,
        protected ?string $outletId = null,
        protected ?string $saleId = null,
        protected ?string $lineItemId = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'product_id' => $this->productId,
            'outlet_id' => $this->outletId,
            'sale_id' => $this->saleId,
            'line_item_id' => $this->lineItemId,
            'before' => $this->before,
            'page_size' => $this->pageSize,
        ]);
    }
}
