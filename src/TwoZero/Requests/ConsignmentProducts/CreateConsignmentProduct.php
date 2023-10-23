<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateConsignmentProduct
 *
 * Add a product to the given consignment.
 */
class CreateConsignmentProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/products";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
