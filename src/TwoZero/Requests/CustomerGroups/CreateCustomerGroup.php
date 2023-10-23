<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateCustomerGroup
 *
 * Create a new customer group
 */
class CreateCustomerGroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customer_groups";
	}


	public function __construct()
	{
	}
}
