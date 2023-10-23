<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateVariantAttribute
 *
 * Variant Attributes are required when creating variants. They are used to specify what properties
 * make a particular SKU different to another. e.g. You may
 * have an attribute 'Size' that lets you
 * differentiate variants based on their size.
 */
class CreateVariantAttribute extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/variant_attributes";
	}


	public function __construct()
	{
	}
}
