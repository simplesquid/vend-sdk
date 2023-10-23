<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PartnerUpdateSubscriptionToken
 *
 * Creates a partner subscription token with the intention of updating a subscription (called by
 * partner using retailer's access token)
 */
class PartnerUpdateSubscriptionToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/partner/billing/update-subscription/token";
	}


	public function __construct()
	{
	}
}
