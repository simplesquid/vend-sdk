<?php

namespace SimpleSquid\Vend\ZeroNine\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\CreateUpdateRegisterSale;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\GetRegisterSale;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\ListRegisterSales;

class RegisterSales extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createUpdateRegisterSale(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateUpdateRegisterSale($payload));
    }

    public function getRegisterSale(
        string $registerSaleId,
    ): Response {
        return $this->connector->send(new GetRegisterSale($registerSaleId));
    }

    /**
     * @param  null|string[]  $status
     */
    public function listRegisterSales(
        ?string $since = null,
        ?string $outletId = null,
        ?array $status = null,
        ?int $page = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListRegisterSales($since, $outletId, $status, $page, $pageSize));
    }
}
