<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\CreateWebhook;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\DeleteWebhook;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\GetWebhook;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\ListWebhooks;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\UpdateWebhook;

class Webhooks extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createWebhook(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateWebhook($payload));
    }

    public function deleteWebhook(
        string $webhookId,
    ): Response {
        return $this->connector->send(new DeleteWebhook($webhookId));
    }

    public function getWebhook(
        string $webhookId,
    ): Response {
        return $this->connector->send(new GetWebhook($webhookId));
    }

    public function listWebhooks(): Response
    {
        return $this->connector->send(new ListWebhooks());
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateWebhook(
        string $webhookId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateWebhook($webhookId, $payload));
    }
}
