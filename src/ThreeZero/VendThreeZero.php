<?php

namespace SimpleSquid\Vend\ThreeZero;

use Saloon\Http\Connector;
use SimpleSquid\Vend\ThreeZero\Resource\PriceBooks;

/**
 * API 3.0
 *
 * Endpoints for version 3.0 of the Vend API.
 */
class VendThreeZero extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://domain_prefix.vendhq.com/api/3.0';
	}


	public function priceBooks(): PriceBooks
	{
		return new PriceBooks($this);
	}
}
