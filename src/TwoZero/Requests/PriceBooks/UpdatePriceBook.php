<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * UpdatePriceBook
 *
 * **DEPRECATED** This endpoint has a 3.0 equivalent. We recommend using that instead, which now uses
 * PUT method.
 * Update a price book by ID
 */
class UpdatePriceBook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/price_books/{$this->priceBookId}";
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function __construct(
		protected string $priceBookId,
	) {
	}
}
