<?php

namespace SimpleSquid\Vend\ZeroNine;

use Saloon\Http\Connector;
use SimpleSquid\Vend\ZeroNine\Resource\ConsignmentProducts;
use SimpleSquid\Vend\ZeroNine\Resource\Consignments;
use SimpleSquid\Vend\ZeroNine\Resource\Customers;
use SimpleSquid\Vend\ZeroNine\Resource\Outlets;
use SimpleSquid\Vend\ZeroNine\Resource\PaymentTypes;
use SimpleSquid\Vend\ZeroNine\Resource\Products;
use SimpleSquid\Vend\ZeroNine\Resource\RegisterSales;
use SimpleSquid\Vend\ZeroNine\Resource\Registers;
use SimpleSquid\Vend\ZeroNine\Resource\Suppliers;
use SimpleSquid\Vend\ZeroNine\Resource\Taxes;
use SimpleSquid\Vend\ZeroNine\Resource\Users;
use SimpleSquid\Vend\ZeroNine\Resource\Webhooks;

/**
 * API 0.9
 *
 * The current state of the original Vend API.
 */
class VendZeroNine extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://domain_prefix.vendhq.com/api';
	}


	public function consignmentProducts(): ConsignmentProducts
	{
		return new ConsignmentProducts($this);
	}


	public function consignments(): Consignments
	{
		return new Consignments($this);
	}


	public function customers(): Customers
	{
		return new Customers($this);
	}


	public function outlets(): Outlets
	{
		return new Outlets($this);
	}


	public function paymentTypes(): PaymentTypes
	{
		return new PaymentTypes($this);
	}


	public function products(): Products
	{
		return new Products($this);
	}


	public function registerSales(): RegisterSales
	{
		return new RegisterSales($this);
	}


	public function registers(): Registers
	{
		return new Registers($this);
	}


	public function suppliers(): Suppliers
	{
		return new Suppliers($this);
	}


	public function taxes(): Taxes
	{
		return new Taxes($this);
	}


	public function users(): Users
	{
		return new Users($this);
	}


	public function webhooks(): Webhooks
	{
		return new Webhooks($this);
	}
}
