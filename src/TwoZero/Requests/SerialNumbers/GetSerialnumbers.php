<?php

namespace SimpleSquid\Vend\TwoZero\Requests\SerialNumbers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-serialnumbers
 *
 * Returns a paginated list of serial numbers.
 */
class GetSerialnumbers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/serialnumbers";
	}


	/**
	 * @param null|string $productId A product ID. This filters the serial numbers to only include ones on this product.
	 * @param null|string $outletId An outlet ID. This filters the serial numbers to only include ones on this outlet.
	 * @param null|string $saleId A sale ID. This filters the serial numbers to only include ones that were sold in the specified sale.
	 * @param null|string $lineItemId A line item ID. This filters the serial numbers to only include ones sold in the specified line item.
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?string $productId = null,
		protected ?string $outletId = null,
		protected ?string $saleId = null,
		protected ?string $lineItemId = null,
		protected ?int $before = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'product_id' => $this->productId,
			'outlet_id' => $this->outletId,
			'sale_id' => $this->saleId,
			'line_item_id' => $this->lineItemId,
			'before' => $this->before,
			'page_size' => $this->pageSize,
		]);
	}
}
