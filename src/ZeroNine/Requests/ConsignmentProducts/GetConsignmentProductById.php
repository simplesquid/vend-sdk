<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetConsignmentProductByID
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a single
 * consignment product.
 */
class GetConsignmentProductById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignment_product/{$this->consignmentProductId}";
	}


	/**
	 * @param string $consignmentProductId The ID of the consignment to get.
	 */
	public function __construct(
		protected string $consignmentProductId,
	) {
	}
}
