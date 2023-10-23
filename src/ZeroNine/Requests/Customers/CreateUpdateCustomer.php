<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Customers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateUpdateCustomer
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a single
 * new or updated customer object.
 */
class CreateUpdateCustomer extends Request implements HasBody
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
