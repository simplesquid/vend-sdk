<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListStoreCredits extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/store_credits';
    }

    /**
     * @param  null|string[]  $includes
     */
    public function __construct(
        protected ?int $pageSize = null,
        protected ?array $includes = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'page_size' => $this->pageSize,
            'includes' => $this->includes,
        ]);
    }
}