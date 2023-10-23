<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateOrUpdateConsignmentProducts
 *
 * Add or update the products in a consignment in bulk.
 *
 * **Note**: Count and received are required
 * fields.
 *
 * **Note**: It is not recommended to update more than 500 products at a time, as this may
 * lead to server timeouts.
 */
class CreateOrUpdateConsignmentProducts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/bulk";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
