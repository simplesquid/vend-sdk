<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListStoreCreditForCustomer
 *
 * Returns a list of store credits for the given customer id.
 */
class ListStoreCreditForCustomer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/store_credits/{$this->customerId}";
	}


	/**
	 * @param string $customerId Find by customer id.
	 * @param null|string $includes Include supplementary data. The only valid value for includes[] is 'customer'.
	 */
	public function __construct(
		protected string $customerId,
		protected ?string $includes = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['includes[]' => $this->includes]);
	}
}
