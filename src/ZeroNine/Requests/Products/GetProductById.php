<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetProductByID
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns an array
 * with a single product inside it.
 */
class GetProductById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}";
	}


	/**
	 * @param string $productId An ID of an existing product.
	 */
	public function __construct(
		protected string $productId,
	) {
	}
}
