<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductImages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetProductImageDataByID
 *
 * Returns the metadata for a single product image with a given ID.
 * This method is useful for checking
 * the status of an image after it was uploaded.
 */
class GetProductImageDataById extends Request
{
	protected Method $method = Method::GET;


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
