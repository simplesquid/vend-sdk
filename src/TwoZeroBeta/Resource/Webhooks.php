<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\CreateWebhook;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\DeleteWebhook;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\GetWebhook;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\ListWebhooks;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\UpdateWebhook;

class Webhooks extends Resource
{
    public function getWebhook(
        string $webhookId,
    ): Response {
        return $this->connector->send(new GetWebhook($webhookId));
    }

    public function updateWebhook(
        string $webhookId,
    ): Response {
        return $this->connector->send(new UpdateWebhook($webhookId));
    }

    public function deleteWebhook(
        string $webhookId,
    ): Response {
        return $this->connector->send(new DeleteWebhook($webhookId));
    }

    public function listWebhooks(): Response
    {
        return $this->connector->send(new ListWebhooks());
    }

    public function createWebhook(): Response
    {
        return $this->connector->send(new CreateWebhook());
    }
}
