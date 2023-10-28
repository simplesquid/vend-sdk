<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\GetSupplierById;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\ListSuppliers;

class Suppliers extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listSuppliers(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListSuppliers($before, $pageSize));
    }

    /**
     * @param  string  $supplierId The supplier id
     */
    public function getSupplierById(string $supplierId): Response
    {
        return $this->connector->send(new GetSupplierById($supplierId));
    }
}
