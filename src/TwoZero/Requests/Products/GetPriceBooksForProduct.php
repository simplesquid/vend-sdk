<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPriceBooksForProduct
 *
 * This endpoint returns the list of price books the given product is in.
 */
class GetPriceBooksForProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}/price_book_products";
	}


	/**
	 * @param string $productId The product id to find in the Price Books
	 */
	public function __construct(
		protected string $productId,
	) {
	}
}
