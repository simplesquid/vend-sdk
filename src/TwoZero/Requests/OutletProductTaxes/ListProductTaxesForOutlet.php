<?php

namespace SimpleSquid\Vend\TwoZero\Requests\OutletProductTaxes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListProductTaxesForOutlet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/outlet_taxes';
    }

    public function __construct(
        protected ?string $outletId = null,
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'outlet_id' => $this->outletId,
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'deleted' => $this->deleted,
        ]);
    }
}
