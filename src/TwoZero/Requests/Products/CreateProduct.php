<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateProduct
 *
 * Creates a new product.
 */
class CreateProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/products";
	}


	public function __construct()
	{
	}
}
