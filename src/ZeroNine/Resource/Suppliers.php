<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\CreateUpdateSupplier;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\DeleteSupplier;

class Suppliers extends Resource
{
    /**
     * @param  array<string, string>|null  $contact
     */
    public function createUpdateSupplier(
        string $id = null,
        string $name = null,
        string $description = null,
        array $contact = null,
    ): Response {
        return $this->connector->send(new CreateUpdateSupplier($id, $name, $description, $contact));
    }

    public function deleteSupplier(
        string $id
    ): Response {
        return $this->connector->send(new DeleteSupplier($id));
    }
}
