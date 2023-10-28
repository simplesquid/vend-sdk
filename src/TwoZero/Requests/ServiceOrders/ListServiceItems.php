<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListServiceItems
 *
 * Returns a paginated list of service items.
 */
class ListServiceItems extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/serviceItems';
    }

    /**
     * @param  null|int  $limit The maximum number of items to be returned in the response.
     */
    public function __construct(
        protected ?int $limit = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit]);
    }
}
