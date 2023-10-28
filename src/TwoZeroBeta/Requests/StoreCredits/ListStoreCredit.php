<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListStoreCredit
 *
 * Returns a list of store credit customers.
 */
class ListStoreCredit extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/store_credits';
    }

    /**
     * @param  null|int  $pageSize The maximum number of items to be returned in the response.
     * @param  null|string  $includes Include supplementary data. The only valid value for includes[] is 'customer'.
     */
    public function __construct(
        protected ?int $pageSize = null,
        protected ?string $includes = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page_size' => $this->pageSize, 'includes[]' => $this->includes]);
    }
}
