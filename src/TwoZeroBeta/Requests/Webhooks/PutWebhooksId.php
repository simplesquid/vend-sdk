<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * put-webhooks-id
 *
 * Update an existing webhook
 */
class PutWebhooksId extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/webhooks/{$this->webhookId}";
	}


	/**
	 * @param string $webhookId
	 */
	public function __construct(
		protected string $webhookId,
	) {
	}
}
