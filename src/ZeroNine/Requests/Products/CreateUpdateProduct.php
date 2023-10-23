<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateUpdateProduct
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a single
 * new or updated product object.
 */
class CreateUpdateProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/products";
	}


	public function __construct()
	{
	}
}
