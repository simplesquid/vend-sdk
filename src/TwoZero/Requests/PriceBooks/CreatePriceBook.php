<?php

namespace SimpleSquid\Vend\TwoZero\Requests\PriceBooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreatePriceBook
 *
 * **DEPRECATED** This endpoint has a 3.0 equivalent. We recommend using that instead.
 * Create a price
 * book
 */
class CreatePriceBook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/price_books";
	}


	public function __construct()
	{
	}
}
