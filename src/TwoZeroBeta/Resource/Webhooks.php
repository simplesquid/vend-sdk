<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\DeleteWebhooksWebhookId;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\GetWebhooks;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\GetWebhooksId;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\PostWebhooks;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\PutWebhooksId;

class Webhooks extends Resource
{
    public function getWebhooksId(string $webhookId): Response
    {
        return $this->connector->send(new GetWebhooksId($webhookId));
    }

    public function putWebhooksId(string $webhookId): Response
    {
        return $this->connector->send(new PutWebhooksId($webhookId));
    }

    public function deleteWebhooksWebhookId(string $webhookId): Response
    {
        return $this->connector->send(new DeleteWebhooksWebhookId($webhookId));
    }

    public function getWebhooks(): Response
    {
        return $this->connector->send(new GetWebhooks());
    }

    public function postWebhooks(): Response
    {
        return $this->connector->send(new PostWebhooks());
    }
}
