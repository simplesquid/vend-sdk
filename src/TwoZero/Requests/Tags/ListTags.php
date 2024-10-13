<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListTags extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/tags';
    }

    public function __construct(
        protected ?int $after = null,
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?bool $deleted = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'after' => $this->after,
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'deleted' => $this->deleted,
        ]);
    }
}
