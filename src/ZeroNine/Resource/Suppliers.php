<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\CreateUpdateSupplier;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\DeleteSupplier;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\GetSupplierById;
use SimpleSquid\Vend\ZeroNine\Requests\Suppliers\ListSuppliers;
use SimpleSquid\Vend\ZeroNine\Resource;

class Suppliers extends Resource
{
	/**
	 * @param float|int $page The number of the page of results to be returned.
	 * @param float|int $pageSize The size of the page of results to be returned.
	 */
	public function listSuppliers(float|int|null $page, float|int|null $pageSize): Response
	{
		return $this->connector->send(new ListSuppliers($page, $pageSize));
	}


	public function createUpdateSupplier(): Response
	{
		return $this->connector->send(new CreateUpdateSupplier());
	}


	/**
	 * @param string $supplierId An ID of an existing supplier object
	 */
	public function getSupplierById(string $supplierId): Response
	{
		return $this->connector->send(new GetSupplierById($supplierId));
	}


	/**
	 * @param string $supplierId The ID of the supplier to be deleted.
	 */
	public function deleteSupplier(string $supplierId): Response
	{
		return $this->connector->send(new DeleteSupplier($supplierId));
	}
}
