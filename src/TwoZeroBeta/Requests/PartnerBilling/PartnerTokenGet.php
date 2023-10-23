<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PartnerTokenGet
 *
 * Returns a subscription token data
 */
class PartnerTokenGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/partner/billing/token/{$this->partnerSubscriptionToken}";
	}


	/**
	 * @param string $partnerSubscriptionToken The partner subscription token
	 */
	public function __construct(
		protected string $partnerSubscriptionToken,
	) {
	}
}
