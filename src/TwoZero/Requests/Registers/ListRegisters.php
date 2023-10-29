<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListRegisters extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/registers';
    }

    public function __construct(
        protected ?int $before = null,
        protected ?bool $deleted = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'deleted' => $this->deleted, 'page_size' => $this->pageSize]);
    }
}
