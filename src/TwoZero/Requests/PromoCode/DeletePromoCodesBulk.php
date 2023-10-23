<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PromoCode;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeletePromoCodesBulk
 *
 * Delete promo codes, by promocode IDs
 */
class DeletePromoCodesBulk extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/promocode/bulk";
	}


	public function __construct()
	{
	}
}
