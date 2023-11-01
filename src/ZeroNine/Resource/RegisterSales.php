<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\CreateUpdateRegisterSale;

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
}
