<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listChannels
 *
 * Returns a list of configured channels.
 */
class ListChannels extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels";
	}


	public function __construct()
	{
	}
}
