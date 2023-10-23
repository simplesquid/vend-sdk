<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPriceBookByIDV3
 *
 * Returns a single price book with a requested ID
 */
class GetPriceBookByIdv3 extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/price_books/{$this->id}";
	}


	/**
	 * @param string $id The price book id
	 */
	public function __construct(
		protected string $id,
	) {
	}
}
