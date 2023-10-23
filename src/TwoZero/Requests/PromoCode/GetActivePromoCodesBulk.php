<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PromoCode;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * GetActivePromoCodesBulk
 *
 * Get promo codes, with their associated promotions.
 */
class GetActivePromoCodesBulk extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/promocode/bulk/active";
	}


	public function __construct()
	{
	}
}
