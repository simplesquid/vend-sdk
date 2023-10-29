<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\GetRequest;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\GetRequestText;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\ListChannels;
use SimpleSquid\Vend\TwoZero\Requests\ChannelRequestLog\ListRequests;

class ChannelRequestLog extends Resource
{
    public function listRequests(
        ?string $statusCode,
        ?string $requestMethod,
        ?string $occurredBefore,
        ?string $occurredAfter,
        ?string $statusCodeBefore,
        ?string $statusCodeAfter,
        ?string $channelId,
    ): Response {
        return $this->connector->send(new ListRequests($statusCode, $requestMethod, $occurredBefore, $occurredAfter, $statusCodeBefore, $statusCodeAfter, $channelId));
    }

    public function getRequest(string $id): Response
    {
        return $this->connector->send(new GetRequest($id));
    }

    public function getRequestText(string $id): Response
    {
        return $this->connector->send(new GetRequestText($id));
    }

    public function listChannels(): Response
    {
        return $this->connector->send(new ListChannels());
    }
}
