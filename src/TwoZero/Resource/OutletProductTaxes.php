<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\OutletProductTaxes\ListOutletProductTaxes;
use SimpleSquid\Vend\TwoZero\Resource;

class OutletProductTaxes extends Resource
{
	/**
	 * @param string $outletId The ID of the outlet for which the results should be returned.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listOutletProductTaxes(?string $outletId, ?int $before, ?int $pageSize, ?bool $deleted): Response
	{
		return $this->connector->send(new ListOutletProductTaxes($outletId, $before, $pageSize, $deleted));
	}
}
