<?php

namespace SimpleSquid\Vend\ThreeZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\CreatePriceBookV3;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\GetPriceBookByIdv3;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\ListPriceBooksV3;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\UpdatePriceBookV3;
use SimpleSquid\Vend\ThreeZero\Resource;

class PriceBooks extends Resource
{
	/**
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param string $order Field used to sort the results.
	 * @param string $direction Sort results direction. ASC or DESC.
	 * @param bool $deleted Include (true) or exclude (false) deleted price books. Default value is false.
	 * @param string $customerGroupId Filter the list and show only price books linked to the specified Customer Group.
	 */
	public function listPriceBooksV3(
		?int $before,
		?int $pageSize,
		?string $order,
		?string $direction,
		?bool $deleted,
		?string $customerGroupId,
	): Response
	{
		return $this->connector->send(new ListPriceBooksV3($before, $pageSize, $order, $direction, $deleted, $customerGroupId));
	}


	public function createPriceBookV3(): Response
	{
		return $this->connector->send(new CreatePriceBookV3());
	}


	/**
	 * @param string $id The price book id
	 */
	public function getPriceBookByIdv3(string $id): Response
	{
		return $this->connector->send(new GetPriceBookByIdv3($id));
	}


	/**
	 * @param string $id The price book id
	 */
	public function updatePriceBookV3(string $id): Response
	{
		return $this->connector->send(new UpdatePriceBookV3($id));
	}
}
