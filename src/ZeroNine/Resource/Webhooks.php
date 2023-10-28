<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Webhooks\CreateWebhook;
use SimpleSquid\Vend\ZeroNine\Requests\Webhooks\DeleteWebhook;
use SimpleSquid\Vend\ZeroNine\Requests\Webhooks\GetWebhookById;
use SimpleSquid\Vend\ZeroNine\Requests\Webhooks\ListWebhooks;
use SimpleSquid\Vend\ZeroNine\Requests\Webhooks\UpdateWebhook;

class Webhooks extends Resource
{
    public function listWebhooks(): Response
    {
        return $this->connector->send(new ListWebhooks());
    }

    public function createWebhook(): Response
    {
        return $this->connector->send(new CreateWebhook());
    }

    public function getWebhookById(string $webhookId): Response
    {
        return $this->connector->send(new GetWebhookById($webhookId));
    }

    /**
     * @param  string  $webhookId The ID of the webhook to be updated.
     */
    public function updateWebhook(string $webhookId): Response
    {
        return $this->connector->send(new UpdateWebhook($webhookId));
    }

    public function deleteWebhook(string $webhookId): Response
    {
        return $this->connector->send(new DeleteWebhook($webhookId));
    }
}
