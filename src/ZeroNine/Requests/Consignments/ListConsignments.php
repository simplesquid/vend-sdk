<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListConsignments
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of consignments.
 */
class ListConsignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignment";
	}


	/**
	 * @param null|string $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
	 * @param null|float|int $page The number of the page of results to be returned.
	 * @param null|float|int $pageSize The size of the page of results to be returned.
	 */
	public function __construct(
		protected ?string $since = null,
		protected float|int|null $page = null,
		protected float|int|null $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['since' => $this->since, 'page' => $this->page, 'page_size' => $this->pageSize]);
	}
}
