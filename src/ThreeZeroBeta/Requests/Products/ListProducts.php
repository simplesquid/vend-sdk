<?php

namespace SimpleSquid\Vend\ThreeZeroBeta\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListProducts
 *
 * Returns a list of products
 */
class ListProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products";
	}


	/**
	 * @param null|int $sinceVersion Only show the products with version number greater than the value of since_version.
	 * @param null|int $pageSize The number of products to show per page.
	 * @param null|bool $includeDeleted Whether to include deleted products or not.
	 */
	public function __construct(
		protected ?int $sinceVersion = null,
		protected ?int $pageSize = null,
		protected ?bool $includeDeleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['since_version' => $this->sinceVersion, 'page_size' => $this->pageSize, 'include_deleted' => $this->includeDeleted]);
	}
}
