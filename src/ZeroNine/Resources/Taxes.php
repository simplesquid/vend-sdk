<?php

namespace SimpleSquid\Vend\ZeroNine\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\CreateTax;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\GetTax;

class Taxes extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createTax(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateTax($payload));
    }

    public function getTax(
        string $taxId,
    ): Response {
        return $this->connector->send(new GetTax($taxId));
    }
}
