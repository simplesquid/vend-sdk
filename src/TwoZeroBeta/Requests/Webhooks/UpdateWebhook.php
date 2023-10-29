<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateWebhook extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    public function __construct(
        protected string $webhookId,
    ) {
    }
}
