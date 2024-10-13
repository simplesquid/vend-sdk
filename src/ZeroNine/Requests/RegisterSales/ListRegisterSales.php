<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListRegisterSales extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/register_sales';
    }

    /**
     * @param  null|string[]  $status
     */
    public function __construct(
        protected ?string $since = null,
        protected ?string $outletId = null,
        protected ?array $status = null,
        protected ?int $page = null,
        protected ?int $pageSize = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'since' => $this->since,
            'outlet_id' => $this->outletId,
            'status' => $this->status,
            'page' => $this->page,
            'page_size' => $this->pageSize,
        ]);
    }
}
