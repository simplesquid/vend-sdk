<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPriceBookbyID
 *
 * **DEPRECATED** This endpoint has a 3.0 equivalent. We recommend using that instead.
 * Returns a single
 * price book with a requested ID
 */
class GetPriceBookbyId extends Request
{
	protected Method $method = Method::GET;


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
