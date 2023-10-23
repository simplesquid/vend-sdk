<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-webhooks-id
 *
 * Fetch a single webhook by its ID.
 */
class GetWebhooksId extends Request
{
	protected Method $method = Method::GET;


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
