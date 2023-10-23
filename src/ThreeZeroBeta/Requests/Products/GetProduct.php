<?php

namespace SimpleSquid\Vend\ThreeZeroBeta\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetProduct
 *
 * Returns the given product.
 */
class GetProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->id}";
	}


	/**
	 * @param string $id The product id
	 */
	public function __construct(
		protected string $id,
	) {
	}
}
