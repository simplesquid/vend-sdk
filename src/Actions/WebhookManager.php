<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\ZeroDotNine\Webhook;
use SimpleSquid\Vend\Resources\ZeroDotNine\WebhookCollection;

class WebhookManager
{
    use ManagesResources;

    /**
     * Create a webhook.
     * Creates and returns a new webhook.
     *
     * @param  Webhook|array  $webhook
     *
     * @return Webhook
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create($webhook): Webhook
    {
        if ($webhook instanceof Webhook) {
            $webhook = $webhook->toArray();
        }

        $response = $this->vend->post('webhooks', ['data' => json_encode($webhook)], 'form_params');

        return new Webhook($response['data']);
    }

    /**
     * Delete a webhook by ID.
     * Deletes the webhook with the given ID.
     *
     * @param  string  $id
     *
     * @return bool
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function delete(string $id): bool
    {
        return $this->deleteResource("webhooks/$id");
    }

    /**
     * Get a single webhook by ID.
     * Returns a single webhooks with the given ID.
     *
     * @param  string  $id
     *
     * @return Webhook
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Webhook
    {
        return $this->single(Webhook::class, "webhooks/$id", 'root');
    }

    /**
     * List webhooks.
     * Returns a list of webhooks.
     * NOTE: This endpoint will only return webhooks created by the application which is making the request.*
     *
     * @return WebhookCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(): WebhookCollection
    {
        return $this->collection(WebhookCollection::class, 'webhooks', [], 'root');
    }

    /**
     * Update a webhook by ID.
     * Updates a webhook with the given `id`.
     * __NOTE:__ The `Content-Type` header for this request should be set to `application/x-www-form-urlencoded`.
     *
     * @param  string   $id  The ID of the webhook to be updated.
     * @param  Webhook  $webhook
     *
     * @return Webhook
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function update(string $id, $webhook): Webhook
    {
        if ($webhook instanceof Webhook) {
            $webhook = $webhook->toArray();
        }

        $response = $this->vend->post("webhooks/$id", ['data' => json_encode($webhook)], 'form_params');

        return new Webhook($response['data']);
    }

}