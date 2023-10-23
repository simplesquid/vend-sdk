<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\RegisterSales;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListRegisterSales
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of register sales.
 */
class ListRegisterSales extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/register_sales";
	}


	/**
	 * @param null|string $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
	 * @param null|string $outletId If included, returns only register sales made for the given outlet, identified by ID.
	 * @param null|string $status If included, returns only register sales in the given state. The status[] parameter may be used more than once; returned sales will be in any of the specified states.
	 * @param null|float|int $page The number of the page of results to be returned.
	 * @param null|float|int $pageSize The size of the page of results to be returned.
	 */
	public function __construct(
		protected ?string $since = null,
		protected ?string $outletId = null,
		protected ?string $status = null,
		protected float|int|null $page = null,
		protected float|int|null $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'since' => $this->since,
			'outlet_id' => $this->outletId,
			'status[]' => $this->status,
			'page' => $this->page,
			'page_size' => $this->pageSize,
		]);
	}
}
