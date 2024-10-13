<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetWebhook extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    public function __construct(
        protected string $webhookId,
    ) {}
}
