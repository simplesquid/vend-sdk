<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProduct
 *
 * Deletes a single product. If a variant ID is provided, that single variant is removed.
 */
class DeleteProduct extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}";
	}


	/**
	 * @param string $productId The product id
	 */
	public function __construct(
		protected string $productId,
	) {
	}
}
