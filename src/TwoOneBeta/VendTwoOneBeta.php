<?php

namespace SimpleSquid\Vend\TwoOneBeta;

use Saloon\Http\Connector;
use SimpleSquid\Vend\TwoOneBeta\Resource\Products;

/**
 * API 2.1 - BETA
 *
 * BETA endpoints for version 2.1 of the Vend API.
 */
class VendTwoOneBeta extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://domain_prefix.vendhq.com/api/2.1';
	}


	public function products(): Products
	{
		return new Products($this);
	}
}
