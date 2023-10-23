<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\ProductTypes\GetProductTypeById;
use SimpleSquid\Vend\TwoZero\Requests\ProductTypes\ListProductTypes;
use SimpleSquid\Vend\TwoZero\Resource;

class ProductTypes extends Resource
{
	/**
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listProductTypes(?int $before, ?int $pageSize): Response
	{
		return $this->connector->send(new ListProductTypes($before, $pageSize));
	}


	/**
	 * @param string $productTypeId The product type id
	 */
	public function getProductTypeById(string $productTypeId): Response
	{
		return $this->connector->send(new GetProductTypeById($productTypeId));
	}
}
