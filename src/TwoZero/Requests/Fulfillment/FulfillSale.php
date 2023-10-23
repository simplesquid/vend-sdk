<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Fulfillment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * FulfillSale
 *
 * Fulfil an unfulfilled sale.
 */
class FulfillSale extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/sales/{$this->saleId}/fulfill";
	}


	/**
	 * @param string $saleId The sale id
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
