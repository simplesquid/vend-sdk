<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSingleRequest
 *
 * Returns a single request log entry with a specific ID.
 */
class GetSingleRequest extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channel_requests/{$this->requestLogId}";
	}


	/**
	 * @param string $requestLogId The request log id
	 */
	public function __construct(
		protected string $requestLogId,
	) {
	}
}
