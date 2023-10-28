<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSingleRequestText
 *
 * Returns a text representation of a single request log entry with a specific ID.
 */
class GetSingleRequestText extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/channel_requests/{$this->requestLogIdTxt}";
    }

    /**
     * @param  string  $requestLogId The request log id
     */
    public function __construct(
        protected string $requestLogId,
    ) {
    }
}
