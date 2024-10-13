<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Quotes;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use SimpleSquid\Vend\Common\Paginators\VendCursorPaginator;

class ListQuotes extends Request implements HasRequestPagination
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/quotes';
    }

    public function __construct(
        protected ?int $after = null,
        protected ?int $limit = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'limit' => $this->limit,
        ]);
    }

    public function paginate(Connector $connector): VendCursorPaginator
    {
        return new class($connector, $this) extends VendCursorPaginator
        {
            protected string $limitKeyName = 'limit';
        };
    }
}
