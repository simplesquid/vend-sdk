<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\CreateTax;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\GetTaxById;
use SimpleSquid\Vend\ZeroNine\Requests\Taxes\ListTaxes;
use SimpleSquid\Vend\ZeroNine\Resource;

class Taxes extends Resource
{
	public function listTaxes(): Response
	{
		return $this->connector->send(new ListTaxes());
	}


	public function createTax(): Response
	{
		return $this->connector->send(new CreateTax());
	}


	/**
	 * @param string $taxId An ID of an existing tax object.
	 */
	public function getTaxById(string $taxId): Response
	{
		return $this->connector->send(new GetTaxById($taxId));
	}
}
