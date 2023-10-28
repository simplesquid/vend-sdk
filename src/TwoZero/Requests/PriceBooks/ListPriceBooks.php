<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListPriceBooks
 *
 * **DEPRECATED** This endpoint has a 3.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of price books.
 *
 * **Note**: In general you should avoid using price books unless the
 * retailers' price books are already defined by an external system. The promotions API is the
 * recommended way of providing custom pricing as it is rule based and more powerful, which reduces the
 * amount of manual changes required compared to price books.
 */
class ListPriceBooks extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/price_books';
    }

    /**
     * @param  null|int  $before The upper limit for the version numbers to be included in the response.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     */
    public function __construct(
        protected ?int $before = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'page_size' => $this->pageSize]);
    }
}
