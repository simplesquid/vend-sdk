<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * UpdatePriceBookProducts
 *
 * Update price book products.
 *
 * > **Note**: When adding a product the retail price is the tax exclusive
 * price of the product if your store is tax exclusive, and tax inclusive if your store is tax
 * inclusive. The returned value is always tax exclusive.
 *
 * > **Note**: The request body may not contain
 * more than 100 price book products.
 */
class UpdatePriceBookProducts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/price_books/{$this->priceBookId}/products";
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function __construct(
		protected string $priceBookId,
	) {
	}
}
