<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListConsignmentTotals
 *
 * This endpoint allows you to get the count and cost for a consignment. It can be used for type
 * `SUPPLIER`, `OUTLET` or `RETURN` (not `STOCKTAKE`). The status of the consignment does not matter
 * but the status will determine which values makes sense. If the consignment is `OPEN` or `SENT` the
 * received count and cost should both be zero. For completely received consignments received cost
 * should equal the sent cost and the received count should equal the sent count. For partially
 * received consignments we would expect the received cost value to be less than sent cost value, and
 * the received count to be less than the sent count.
 */
class ListConsignmentTotals extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/totals";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
