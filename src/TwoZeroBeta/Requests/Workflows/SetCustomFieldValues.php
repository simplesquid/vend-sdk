<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * SetCustomFieldValues
 *
 * Set new custom field values on a given entity.
 */
class SetCustomFieldValues extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/workflows/custom_fields/values";
	}


	public function __construct()
	{
	}
}
