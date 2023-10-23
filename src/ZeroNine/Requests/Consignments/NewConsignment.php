<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Consignments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * NewConsignment
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Creates a new
 * consignment.
 */
class NewConsignment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignment";
	}


	public function __construct()
	{
	}
}
