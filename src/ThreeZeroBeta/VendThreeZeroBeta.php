<?php

namespace SimpleSquid\Vend\ThreeZeroBeta;

use Saloon\Http\Connector;
use SimpleSquid\Vend\ThreeZeroBeta\Resource\Products;

/**
 * API 3.0 - BETA
 *
 * BETA endpoints for version 3.0 of the Vend API.
 */
class VendThreeZeroBeta extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://domain_prefix.vendhq.com/api/3.0';
	}


	public function products(): Products
	{
		return new Products($this);
	}
}
