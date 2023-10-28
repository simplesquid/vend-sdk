<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\CreateTax;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\GetTax;

class Taxes extends Resource
{
    public function createTax(
        string $name,
        float $rate,
    ): Response {
        return $this->connector->send(new CreateTax($name, $rate));
    }

    public function getTax(
        string $id
    ): Response {
        return $this->connector->send(new GetTax($id));
    }
}
