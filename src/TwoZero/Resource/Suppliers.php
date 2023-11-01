<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\GetSupplier;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\ListSuppliers;

class Suppliers extends Resource
{
    public function getSupplier(
        string $supplierId,
    ): Response {
        return $this->connector->send(new GetSupplier($supplierId));
    }

    public function listSuppliers(
        ?int $after,
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListSuppliers($after, $before, $pageSize));
    }
}
