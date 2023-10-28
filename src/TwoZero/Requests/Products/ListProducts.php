<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListProducts
 *
 * Returns a paginated list of products.
 *
 * To search for products, please have a look at our [Search
 * endpoint](/reference/search-1) on what is supported.
 */
class ListProducts extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products';
    }

    /**
     * @param  null|int  $before The upper limit for the version numbers to be included in the response.
     * @param  null|bool  $deleted Indicates whether deleted items should be included in the response.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     */
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
