<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ProductImages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductImageByID
 *
 * Deletes the product image with the requested ID.
 */
class DeleteProductImageById extends Request
{
	protected Method $method = Method::DELETE;


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
