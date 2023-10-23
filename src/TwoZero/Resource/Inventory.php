<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Inventory\ListInventoryRecords;
use SimpleSquid\Vend\TwoZero\Resource;

class Inventory extends Resource
{
	/**
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listInventoryRecords(?int $before, ?int $pageSize): Response
	{
		return $this->connector->send(new ListInventoryRecords($before, $pageSize));
	}
}
