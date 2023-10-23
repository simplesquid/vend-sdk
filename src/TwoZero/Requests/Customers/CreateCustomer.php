<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateCustomer
 *
 * Creates a new customer.
 */
class CreateCustomer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	public function __construct()
	{
	}
}
