<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\CreateUpdateRegisterSale;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\GetRegisterSaleById;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\ListRegisterSales;

class RegisterSales extends Resource
{
    /**
     * @param  string  $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
     * @param  string  $outletId If included, returns only register sales made for the given outlet, identified by ID.
     * @param  string  $status If included, returns only register sales in the given state. The status[] parameter may be used more than once; returned sales will be in any of the specified states.
     * @param  float|int  $page The number of the page of results to be returned.
     * @param  float|int  $pageSize The size of the page of results to be returned.
     */
    public function listRegisterSales(
        ?string $since,
        ?string $outletId,
        ?string $status,
        float|int|null $page,
        float|int|null $pageSize,
    ): Response {
        return $this->connector->send(new ListRegisterSales($since, $outletId, $status, $page, $pageSize));
    }

    public function createUpdateRegisterSale(): Response
    {
        return $this->connector->send(new CreateUpdateRegisterSale());
    }

    /**
     * @param  string  $saleId An ID of an existing sale
     */
    public function getRegisterSaleById(string $saleId): Response
    {
        return $this->connector->send(new GetRegisterSaleById($saleId));
    }
}
