<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Sales;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetSaleByID
 *
 * Returns a single sale with a given ID.
 */
class GetSaleById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sales/{$this->saleId}";
	}


	/**
	 * @param string $saleId A completed sale ID - a valid sale with status of `CLOSED`, `ONACCOUNT_CLOSED` or `LAYBY_CLOSED`
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
