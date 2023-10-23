<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listRequests
 *
 * Returns a list of request log records.
 */
class ListRequests extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channel_requests";
	}


	/**
	 * @param null|string $statusCode Limit the requests to 1 or more status codes.
	 * @param null|string $requestMethod Limit the requests to 1 or more request methods.
	 * @param null|string $occurredBefore Limit requests to before this RFC3339 date.
	 * @param null|string $occurredAfter Limit requests to after this RFC3339 date.
	 * @param null|string $statusCodeBefore Limit requests to those with status codes less than this value.
	 * @param null|string $statusCodeAfter Limit requests to those with status codes greater than this value.
	 * @param null|string $channelId If provided, request logs will be limited to the supplied channel id. If no id is provided, only requests logged with no channel id will be returned. Requests with no channel id indicate requests made during the setup process.
	 */
	public function __construct(
		protected ?string $statusCode = null,
		protected ?string $requestMethod = null,
		protected ?string $occurredBefore = null,
		protected ?string $occurredAfter = null,
		protected ?string $statusCodeBefore = null,
		protected ?string $statusCodeAfter = null,
		protected ?string $channelId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'status_code' => $this->statusCode,
			'request_method' => $this->requestMethod,
			'occurred_before' => $this->occurredBefore,
			'occurred_after' => $this->occurredAfter,
			'status_code_before' => $this->statusCodeBefore,
			'status_code_after' => $this->statusCodeAfter,
			'channel_id' => $this->channelId,
		]);
	}
}
