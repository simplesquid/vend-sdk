<?php

namespace SimpleSquid\Vend\ZeroNine\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\CreateUpdateSupplier;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\DeleteSupplier;

class Suppliers extends BaseResource
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
