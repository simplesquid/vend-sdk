<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListServices
 *
 * Returns a paginated list of services.
 */
class ListServices extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/services";
	}


	/**
	 * @param null|int $limit The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?int $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit]);
	}
}
