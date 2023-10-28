<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-webhooks-webhookId
 *
 * Delete a webhook
 */
class DeleteWebhooksWebhookId extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    public function __construct(
        protected string $webhookId,
    ) {
    }
}
