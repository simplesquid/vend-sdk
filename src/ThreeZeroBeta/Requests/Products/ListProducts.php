<?php

namespace SimpleSquid\Vend\ThreeZeroBeta\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListProducts extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products';
    }

    public function __construct(
        protected ?int $sinceVersion = null,
        protected ?int $pageSize = null,
        protected ?bool $includeDeleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'since_version' => $this->sinceVersion,
            'page_size' => $this->pageSize,
            'include_deleted' => $this->includeDeleted,
        ]);
    }
}
