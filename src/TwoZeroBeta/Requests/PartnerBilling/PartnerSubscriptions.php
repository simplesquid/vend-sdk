<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PartnerSubscriptions
 *
 * Returns list of partner's subscriptions of the retailer
 */
class PartnerSubscriptions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/partner/billing/subscriptions";
	}


	public function __construct()
	{
	}
}
