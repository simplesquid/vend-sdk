<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Audit;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-security_events
 *
 * This API returns a list of all the security log events **for the current user**. If you want a list
 * of all the security events for all users please use the auditlog_events with filter type ==
 * "security". See the auditlog_events API in the beta documentation for more information.
 */
class GetSecurityEvents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/security_events";
	}


	public function __construct()
	{
	}
}
