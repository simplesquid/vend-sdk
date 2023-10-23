<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListConsignmentProducts
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of consignment products.
 */
class ListConsignmentProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignment_product";
	}


	/**
	 * @param string $consignmentId The ID of a consignment to filter the items for. Shouldn't be used together with the `product_id` parameter.
	 * @param string $productId The ID of a product to filter the items for. Shouldn't be used together with the `consignment_id` parameter.
	 * @param null|float|int $page The number of the page of results to be returned.
	 * @param null|float|int $pageSize The size of the page of results to be returned.
	 */
	public function __construct(
		protected string $consignmentId,
		protected string $productId,
		protected float|int|null $page = null,
		protected float|int|null $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'consignment_id' => $this->consignmentId,
			'product_id' => $this->productId,
			'page' => $this->page,
			'page_size' => $this->pageSize,
		]);
	}
}
