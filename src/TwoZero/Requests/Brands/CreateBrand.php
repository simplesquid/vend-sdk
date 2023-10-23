<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Brands;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateBrand
 *
 * Creates a new brand.
 */
class CreateBrand extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/brands";
	}


	public function __construct()
	{
	}
}
