<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListTags extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/tags';
    }

    public function __construct(
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'deleted' => $this->deleted,
        ]);
    }
}
