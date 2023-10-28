<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListCustomerGroups
 *
 * Return a list of Customer Groups
 */
class ListCustomerGroups extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/customer_groups';
    }

    /**
     * @param  null|int  $before The upper limit for the version numbers to be included in the response.
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     * @param  null|bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function __construct(
        protected ?int $before = null,
        protected ?int $pageSize = null,
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['before' => $this->before, 'page_size' => $this->pageSize, 'deleted' => $this->deleted]);
    }
}
