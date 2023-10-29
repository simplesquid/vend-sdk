<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRequestLog extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/channel_requests/{$this->requestLogId}";
    }

    public function __construct(
        protected string $requestLogId,
    ) {
    }
}
