<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListCustomers
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of customers.
 */
class ListCustomers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/customers';
    }

    /**
     * @param  null|string  $id If included, searches for customers with the given unique ID. The id option cannot be used with the `code` or `email` options.
     * @param  null|string  $code If included, searches for customers with the given customer code. The code option cannot be used with id or email options.
     * @param  null|string  $email If included, searches for customers with the given email address. This is an exact match search. The email option cannot be used with the id or code options.
     * @param  null|string  $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
     * @param  null|float|int  $page The number of the page of results to be returned.
     * @param  null|float|int  $pageSize The size of the page of results to be returned.
     */
    public function __construct(
        protected ?string $id = null,
        protected ?string $code = null,
        protected ?string $email = null,
        protected ?string $since = null,
        protected float|int|null $page = null,
        protected float|int|null $pageSize = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'id' => $this->id,
            'code' => $this->code,
            'email' => $this->email,
            'since' => $this->since,
            'page' => $this->page,
            'page_size' => $this->pageSize,
        ]);
    }
}
