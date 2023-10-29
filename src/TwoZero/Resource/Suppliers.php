<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\GetSupplier;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\ListSuppliers;

class Suppliers extends Resource
{
    public function listSuppliers(
        ?int $before,
        ?int $pageSize,
    ): Response
    {
        return $this->connector->send(new ListSuppliers($before, $pageSize));
    }

    public function getSupplier(
        string $id,
    ): Response
    {
        return $this->connector->send(new GetSupplier($id));
    }
}
