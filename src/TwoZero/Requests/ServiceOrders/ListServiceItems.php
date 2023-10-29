<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListServiceItems extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/serviceItems';
    }

    public function __construct(
        protected ?int $limit = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit]);
    }
}
