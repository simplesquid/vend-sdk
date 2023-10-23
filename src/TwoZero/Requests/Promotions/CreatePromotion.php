<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreatePromotion
 *
 * This endpoint creates a new promotion.
 *
 * It responds with the newly-created promotion, including the
 * promotion's ID.
 */
class CreatePromotion extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/promotions";
	}


	public function __construct()
	{
	}
}
