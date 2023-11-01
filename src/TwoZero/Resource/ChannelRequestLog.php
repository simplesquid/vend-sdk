<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\GetRequestLog;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\GetRequestLogText;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\ListChannels;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\ListRequestLogs;

class ChannelRequestLog extends BaseResource
{
    public function getRequestLog(
        string $requestLogId,
    ): Response {
        return $this->connector->send(new GetRequestLog($requestLogId));
    }

    public function getRequestLogText(
        string $requestLogId,
    ): Response {
        return $this->connector->send(new GetRequestLogText($requestLogId));
    }

    public function listChannels(): Response
    {
        return $this->connector->send(new ListChannels());
    }

    public function listRequestLogs(
        ?string $statusCode = null,
        ?string $requestMethod = null,
        ?string $occurredBefore = null,
        ?string $occurredAfter = null,
        ?string $statusCodeBefore = null,
        ?string $statusCodeAfter = null,
        ?string $channelId = null,
    ): Response {
        return $this->connector->send(new ListRequestLogs(
            $statusCode,
            $requestMethod,
            $occurredBefore,
            $occurredAfter,
            $statusCodeBefore,
            $statusCodeAfter,
            $channelId,
        ));
    }
}
