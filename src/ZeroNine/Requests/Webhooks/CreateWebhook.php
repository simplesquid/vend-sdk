<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Webhooks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateWebhook
 *
 * Creates and returns a new webhook.
 * __NOTE:__ The `Content-Type` header for this request should be
 * set to `application/x-www-form-urlencoded`.
 */
class CreateWebhook extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/webhooks';
    }
}
