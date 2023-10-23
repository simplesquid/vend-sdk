<?php

namespace SimpleSquid\Vend\TwoZero\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateCustomerGroup
 *
 * Update the given Customer Group
 */
class UpdateCustomerGroup extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customer_groups/{$this->customerGroupId}";
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function __construct(
		protected string $customerGroupId,
	) {
	}
}
