<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Sales;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * initReturnSale
 *
 * Initializes a return on a given sale ID and returns the SAVED return. See [the
 * tutorial](/docs/sales_returns) for more information.
 */
class InitReturnSale extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->saleId}/actions/return";
    }

    /**
     * @param  string  $saleId A completed sale ID - a valid sale with status of `CLOSED`, `ONACCOUNT_CLOSED` or `LAYBY_CLOSED`.
     */
    public function __construct(
        protected string $saleId,
    ) {
    }
}
