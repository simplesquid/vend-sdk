<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListRequests extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/channel_requests';
    }

    public function __construct(
        protected ?string $statusCode = null,
        protected ?string $requestMethod = null,
        protected ?string $occurredBefore = null,
        protected ?string $occurredAfter = null,
        protected ?string $statusCodeBefore = null,
        protected ?string $statusCodeAfter = null,
        protected ?string $channelId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'status_code' => $this->statusCode,
            'request_method' => $this->requestMethod,
            'occurred_before' => $this->occurredBefore,
            'occurred_after' => $this->occurredAfter,
            'status_code_before' => $this->statusCodeBefore,
            'status_code_after' => $this->statusCodeAfter,
            'channel_id' => $this->channelId,
        ]);
    }
}
