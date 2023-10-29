<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\CreateUpdateSupplier;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\DeleteSupplier;

class Suppliers extends Resource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createUpdateSupplier(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateUpdateSupplier($payload));
    }

    public function deleteSupplier(
        string $supplierId,
    ): Response {
        return $this->connector->send(new DeleteSupplier($supplierId));
    }
}
