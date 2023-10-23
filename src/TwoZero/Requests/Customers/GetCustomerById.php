<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomerByID
 *
 * Returns a single customer with a requested ID.
 */
class GetCustomerById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}";
	}


	/**
	 * @param string $customerId The customer id
	 */
	public function __construct(
		protected string $customerId,
	) {
	}
}
