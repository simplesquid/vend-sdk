<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListSuppliers
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of suppliers.
 */
class ListSuppliers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/supplier';
    }

    /**
     * @param  null|float|int  $page The number of the page of results to be returned.
     * @param  null|float|int  $pageSize The size of the page of results to be returned.
     */
    public function __construct(
        protected float|int|null $page = null,
        protected float|int|null $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'page_size' => $this->pageSize]);
    }
}
