<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductImages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SetImagePosition
 *
 * Allows for changing the image position in the list
 */
class SetImagePosition extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/product_images/{$this->productImageId}";
	}


	/**
	 * @param string $productImageId The product image id
	 */
	public function __construct(
		protected string $productImageId,
	) {
	}
}
