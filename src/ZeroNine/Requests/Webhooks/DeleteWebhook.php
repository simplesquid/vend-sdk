<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteWebhook
 *
 * Deletes the webhook with the given ID.
 */
class DeleteWebhook extends Request
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
