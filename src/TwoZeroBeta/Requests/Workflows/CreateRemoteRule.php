<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * create-remote-rule
 *
 * Register a new remote rule for the retailer.
 */
class CreateRemoteRule extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/workflows/remote_rules";
	}


	public function __construct()
	{
	}
}
