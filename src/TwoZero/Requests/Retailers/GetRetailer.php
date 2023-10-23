<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Retailers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetRetailer
 *
 * This endpoint returns information about the retailer.
 */
class GetRetailer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/retailer";
	}


	public function __construct()
	{
	}
}
