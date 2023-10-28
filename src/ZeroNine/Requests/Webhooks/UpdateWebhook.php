<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateWebhook
 *
 * Updates a webhook with the given `id`.
 * __NOTE:__ The `Content-Type` header for this request should
 * be set to `application/x-www-form-urlencoded`.
 */
class UpdateWebhook extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    /**
     * @param  string  $webhookId The ID of the webhook to be updated.
     */
    public function __construct(
        protected string $webhookId,
    ) {
    }
}
