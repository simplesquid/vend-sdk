<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use Saloon\PaginationPlugin\Paginator;
use SimpleSquid\Vend\Common\Paginators\VendOffsetPaginator;

class SearchPromotions extends Request implements HasRequestPagination
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/promotions/search';
    }

    /**
     * @param  null|string[]  $outletIds
     */
    public function __construct(
        protected ?string $scope = null,
        protected ?string $name = null,
        protected ?string $startDate = null,
        protected ?string $endDate = null,
        protected ?array $outletIds = null,
        protected ?string $orderBy = null,
        protected ?string $direction = null,
        protected ?int $offset = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'scope' => $this->scope,
            'name' => $this->name,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'outlet_id' => $this->outletIds,
            'order_by' => $this->orderBy,
            'direction' => $this->direction,
            'offset' => $this->offset,
            'page_size' => $this->pageSize,
        ]);
    }

    public function paginate(Connector $connector): Paginator
    {
        return new VendOffsetPaginator($connector, $this);
    }
}
