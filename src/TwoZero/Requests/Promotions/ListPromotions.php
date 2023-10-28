<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListPromotions
 *
 * This endpoint lists all promotions for a retailer.
 *
 * There are optional query parameters that allow
 * filtering promotions. They can't be combined:
 *
 *  - `end_time_from` - only show promotions that have
 * end\_time after or equal to this time
 *  - `end_time_to` - only show promotions that have end\_time
 * before this time
 *
 * For example. the time format for end\_time\_from and end\_time\_to are:
 * `2047-06-21T13:00:00`
 */
class ListPromotions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/promotions';
    }

    /**
     * @param  null|string  $endTimeTo Upper limit for the promotion end date as UTC timestamp. Format: `2020-08-08T12:00:00Z`.
     * @param  null|string  $endTimeFrom Lower limit for the promotion end date as UTC timestamp. Format: `2020-08-08T12:00:00Z`.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     */
    public function __construct(
        protected ?string $endTimeTo = null,
        protected ?string $endTimeFrom = null,
        protected ?int $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['end_time_to' => $this->endTimeTo, 'end_time_from' => $this->endTimeFrom, 'page_size' => $this->pageSize]);
    }
}
