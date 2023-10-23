<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\DeleteWebhooksWebhookId;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\GetWebhooks;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\GetWebhooksId;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\PostWebhooks;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Webhooks\PutWebhooksId;
use SimpleSquid\Vend\TwoZeroBeta\Resource;

class Webhooks extends Resource
{
	/**
	 * @param string $webhookId
	 */
	public function getWebhooksId(string $webhookId): Response
	{
		return $this->connector->send(new GetWebhooksId($webhookId));
	}


	/**
	 * @param string $webhookId
	 */
	public function putWebhooksId(string $webhookId): Response
	{
		return $this->connector->send(new PutWebhooksId($webhookId));
	}


	/**
	 * @param string $webhookId
	 */
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
