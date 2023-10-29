<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class SearchPromotions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/promotions/search';
    }

    public function __construct(
        protected ?string $scope = null,
        protected ?string $name = null,
        protected ?string $startDate = null,
        protected ?string $endDate = null,
        protected ?array $outletId = null,
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
            'outlet_id' => $this->outletId,
            'direction' => $this->direction,
            'offset' => $this->offset,
            'page_size' => $this->pageSize,
        ]);
    }
}
