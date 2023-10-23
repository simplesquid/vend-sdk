<?php

namespace SimpleSquid\Vend\TwoOneBeta\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateProduct
 */
class UpdateProduct extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}";
	}


	/**
	 * @param string $productId The object identifier of the Product to update.
	 */
	public function __construct(
		protected string $productId,
	) {
	}
}
