<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * NewConsignmentProduct
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Adds a new
 * product to a consignment.
 */
class NewConsignmentProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignment_product";
	}


	public function __construct()
	{
	}
}
