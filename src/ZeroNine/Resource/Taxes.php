<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\CreateTax;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\GetTax;

class Taxes extends Resource
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
        string $id,
    ): Response {
        return $this->connector->send(new GetTax($id));
    }
}
