<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRequestLogText extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/channel_requests/{$this->requestLogId}.txt";
    }

    public function __construct(
        protected string $requestLogId,
    ) {
    }
}
