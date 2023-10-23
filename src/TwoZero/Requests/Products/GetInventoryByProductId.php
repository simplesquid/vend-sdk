<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetInventoryByProductID
 *
 * Returns inventory data for a single product in all the outlets.
 */
class GetInventoryByProductId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}/inventory";
	}


	/**
	 * @param string $productId The product id
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected string $productId,
		protected ?int $before = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['before' => $this->before, 'page_size' => $this->pageSize]);
	}
}
