<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListPromotions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/promotions';
    }

    public function __construct(
        protected ?string $endTimeTo = null,
        protected ?string $endTimeFrom = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'end_time_to' => $this->endTimeTo,
            'end_time_from' => $this->endTimeFrom,
            'page_size' => $this->pageSize,
        ]);
    }
}
