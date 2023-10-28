<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListPriceBooksV3
 *
 * Returns a paginated list of price books.
 */
class ListPriceBooksV3 extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/price_books';
    }

    /**
     * @param  null|int  $before The upper limit for the version numbers to be included in the response.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     * @param  null|string  $order Field used to sort the results.
     * @param  null|string  $direction Sort results direction. ASC or DESC.
     * @param  null|bool  $deleted Include (true) or exclude (false) deleted price books. Default value is false.
     * @param  null|string  $customerGroupId Filter the list and show only price books linked to the specified Customer Group.
     */
    public function __construct(
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?string $order = null,
        protected ?string $direction = null,
        protected ?bool $deleted = null,
        protected ?string $customerGroupId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'before' => $this->before,
            'page_size' => $this->pageSize,
            'order' => $this->order,
            'direction' => $this->direction,
            'deleted' => $this->deleted,
            'customer_group_id' => $this->customerGroupId,
        ]);
    }
}
