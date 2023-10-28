<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetRegisterSaleByID
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a single
 * register sale with the given ID, in an array.
 */
class GetRegisterSaleById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/register_sales/{$this->saleId}";
    }

    /**
     * @param  string  $saleId An ID of an existing sale
     */
    public function __construct(
        protected string $saleId,
    ) {
    }
}
