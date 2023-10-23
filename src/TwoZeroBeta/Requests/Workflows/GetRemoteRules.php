<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-remote-rules
 *
 * Returns the remote business rules registered on the retailer.
 */
class GetRemoteRules extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/workflows/remote_rules";
	}


	public function __construct()
	{
	}
}
