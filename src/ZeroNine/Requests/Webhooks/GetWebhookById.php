<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetWebhookByID
 *
 * Returns a single webhooks with the given ID.
 */
class GetWebhookById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    public function __construct(
        protected string $webhookId,
    ) {
    }
}
