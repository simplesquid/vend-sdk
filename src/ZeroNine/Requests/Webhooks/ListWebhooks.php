<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Webhooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListWebhooks
 *
 * Returns a list of webhooks.  *__NOTE:__ This endpoint will only return webhooks created by the
 * application which is making the request.*
 */
class ListWebhooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhooks";
	}


	public function __construct()
	{
	}
}
