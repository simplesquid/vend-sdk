<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeletePriceBook
 *
 * Delete a price book by ID
 *
 * **Note**: The products associated with this price book will be
 * automatically deleted when you delete the price book.
 */
class DeletePriceBook extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/price_books/{$this->priceBookId}";
	}


	/**
	 * @param string $priceBookId Valid Price Book ID.
	 */
	public function __construct(
		protected string $priceBookId,
	) {
	}
}
