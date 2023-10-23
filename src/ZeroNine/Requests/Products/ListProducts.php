<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListProducts
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * paginated list of products.
 */
class ListProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products";
	}


	/**
	 * @param null|string $orderDirection Selects the order direction of the results returned. On of `ASC`(default), `DESC`.
	 * @param null|string $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
	 * @param null|string $active If included, only active or inactive products will be returned. One of: `0` or `1`.
	 * @param null|string $sku If included, only the product with given sku will be returned. It may happen that there will be more products with the same sku. In this case all of them will be returned.
	 * @param null|string $handle If included, only products with given handle will be returned. This is useful for filtering all variants of a product, since all variants share the same handle.
	 * @param null|float|int $page The number of the page of results to be returned.
	 * @param null|float|int $pageSize The size of the page of results to be returned.
	 */
	public function __construct(
		protected ?string $orderDirection = null,
		protected ?string $since = null,
		protected ?string $active = null,
		protected ?string $sku = null,
		protected ?string $handle = null,
		protected float|int|null $page = null,
		protected float|int|null $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'order_direction' => $this->orderDirection,
			'since' => $this->since,
			'active' => $this->active,
			'sku' => $this->sku,
			'handle' => $this->handle,
			'page' => $this->page,
			'page_size' => $this->pageSize,
		]);
	}
}
