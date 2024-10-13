<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Search;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use SimpleSquid\Vend\Common\Paginators\VendOffsetPaginator;

class Search extends Request implements HasRequestPagination
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/search';
    }

    /**
     * @param  array<string, mixed>  $searchAttributes
     */
    public function __construct(
        protected string $type,
        protected array $searchAttributes = [],
        protected ?string $orderBy = null,
        protected ?string $orderDirection = null,
        protected ?int $pageSize = null,
        protected ?int $offset = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'type' => $this->type,
            'order_by' => $this->orderBy,
            'order_direction' => $this->orderDirection,
            'page_size' => $this->pageSize,
            'offset' => $this->offset,
        ] + $this->searchAttributes);
    }

    public function paginate(Connector $connector): VendOffsetPaginator
    {
        return new VendOffsetPaginator($connector, $this);
    }
}
