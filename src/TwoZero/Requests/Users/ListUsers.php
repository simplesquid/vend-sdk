<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListUsers
 *
 * Returns a paginated list of users.
 */
class ListUsers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/users';
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
