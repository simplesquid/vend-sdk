<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\CreateSupplier;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\DeleteSupplier;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\GetSupplier;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\ListSuppliers;
use SimpleSquid\Vend\TwoZero\Requests\Suppliers\UpdateSupplier;

class Suppliers extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createSupplier(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateSupplier($payload));
    }

    public function deleteSupplier(
        string $supplierId,
    ): Response {
        return $this->connector->send(new DeleteSupplier($supplierId));
    }

    public function getSupplier(
        string $supplierId,
    ): Response {
        return $this->connector->send(new GetSupplier($supplierId));
    }

    public function listSuppliers(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListSuppliers($after, $before, $pageSize));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateSupplier(
        string $supplierId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateSupplier($supplierId, $payload));
    }
}
