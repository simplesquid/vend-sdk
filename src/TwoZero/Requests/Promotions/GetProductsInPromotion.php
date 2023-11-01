<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use Saloon\PaginationPlugin\Paginator;
use SimpleSquid\Vend\Common\Paginators\VendOffsetPaginator;

class GetProductsInPromotion extends Request implements HasRequestPagination
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/promotions/{$this->promotionId}/products";
    }

    public function __construct(
        protected string $promotionId,
        protected ?string $name = null,
        protected ?int $offset = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'name' => $this->name,
            'offset' => $this->offset,
            'page_size' => $this->pageSize,
        ]);
    }

    public function paginate(Connector $connector): Paginator
    {
        return new VendOffsetPaginator($connector, $this);
    }
}
