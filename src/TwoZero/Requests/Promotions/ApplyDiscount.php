<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * ApplyDiscount
 *
 * This will find the best possible promotion to a sale, apply it and return the sale and the
 * discount.
 *
 *  * Despite its `POST` method, this endpoint does not modify any server-side state.
 *  * It
 * is the caller's responsibility to pass along the full details of the sale, including all customer
 * information and product information (product type, tags, etc.).
 */
class ApplyDiscount extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/discount";
	}


	public function __construct()
	{
	}
}
