<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Fulfillment;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetFulfillmentsBySaleID
 *
 * Returns a list of sales for a given sale.
 */
class GetFulfillmentsBySaleId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/sales/{$this->saleId}/fulfillments";
    }

    /**
     * @param  string  $saleId The sale id
     */
    public function __construct(
        protected string $saleId,
    ) {
    }
}
