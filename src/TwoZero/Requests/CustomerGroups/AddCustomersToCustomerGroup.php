<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * AddCustomersToCustomerGroup
 *
 * Associates one or more customers with the given customer group
 */
class AddCustomersToCustomerGroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customer_groups/{$this->customerGroupId}/customers";
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function __construct(
		protected string $customerGroupId,
	) {
	}
}
