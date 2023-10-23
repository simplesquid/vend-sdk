<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * StoreCreditReport
 *
 * Returns a report of store credits.
 */
class StoreCreditReport extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/store_credits/report";
	}


	public function __construct()
	{
	}
}
