<?php

namespace SimpleSquid\Vend\TwoZero\Requests\OutletProductTaxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listOutletProductTaxes
 *
 * Returns a paginated list of outlet-product-tax records.
 */
class ListOutletProductTaxes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/outlet_taxes";
	}


	/**
	 * @param null|string $outletId The ID of the outlet for which the results should be returned.
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 * @param null|bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function __construct(
		protected ?string $outletId = null,
		protected ?int $before = null,
		protected ?int $pageSize = null,
		protected ?bool $deleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'outlet_id' => $this->outletId,
			'before' => $this->before,
			'page_size' => $this->pageSize,
			'deleted' => $this->deleted,
		]);
	}
}
