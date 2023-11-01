<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\GetRequestLog;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\GetRequestLogText;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\ListChannels;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\ListRequestLogs;

class ChannelRequestLog extends Resource
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
        ?string $statusCode,
        ?string $requestMethod,
        ?string $occurredBefore,
        ?string $occurredAfter,
        ?string $statusCodeBefore,
        ?string $statusCodeAfter,
        ?string $channelId,
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
