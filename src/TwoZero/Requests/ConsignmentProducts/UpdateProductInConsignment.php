<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateProductInConsignment
 *
 * Updates the specific product within the consignment.
 *
 * **Notes**:
 *
 * - If the type is SUPPLIER or
 * OUTLET then:
 *   * If the type is OUTLET and there is a cost the cost will be update.
 *   * If the
 * status is SENT or DISPATCHED and received is not null the received quantity will be updated.
 *   * If
 * the status is OPEN or SENT and count is not null then the count quantity will be updated.
 * - If the
 * type is RETURN and the status is OPEN or SENT and count is not null then the count quantity will be
 * updated.
 * - If the type is STOCKTAKE and the status is STATUS\_STOCKTAKE\_IN\_PROGRESS or
 * STATUS\_STOCKTAKE\_IN\_PROCESS\_PROCESSED and received is not null then the received quantity will
 * be updated.
 */
class UpdateProductInConsignment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/products/{$this->productId}";
	}


	/**
	 * @param string $consignmentId The consignment id to be updated.
	 * @param string $productId The product id of the product to be added to the consignment.
	 */
	public function __construct(
		protected string $consignmentId,
		protected string $productId,
	) {
	}
}
