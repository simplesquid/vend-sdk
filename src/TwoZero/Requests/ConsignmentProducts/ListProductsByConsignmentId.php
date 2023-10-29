<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListProductsByConsignmentId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}/products";
    }

    public function __construct(
        protected string $consignmentId,
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'page_size' => $this->pageSize]);
    }
}
