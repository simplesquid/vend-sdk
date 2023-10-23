<?php

namespace SimpleSquid\Vend\ThreeZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ThreeZeroBeta\Requests\Products\GetProduct;
use SimpleSquid\Vend\ThreeZeroBeta\Requests\Products\ListProducts;
use SimpleSquid\Vend\ThreeZeroBeta\Resource;

class Products extends Resource
{
	/**
	 * @param int $sinceVersion Only show the products with version number greater than the value of since_version.
	 * @param int $pageSize The number of products to show per page.
	 * @param bool $includeDeleted Whether to include deleted products or not.
	 */
	public function listProducts(?int $sinceVersion, ?int $pageSize, ?bool $includeDeleted): Response
	{
		return $this->connector->send(new ListProducts($sinceVersion, $pageSize, $includeDeleted));
	}


	/**
	 * @param string $id The product id
	 */
	public function getProduct(string $id): Response
	{
		return $this->connector->send(new GetProduct($id));
	}
}
