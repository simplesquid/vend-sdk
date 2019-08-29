<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Version;
use SimpleSquid\Vend\Vend;

trait ManagesResources
{
    /** @var \SimpleSquid\Vend\Vend */
    private $vend;

    /**
     * Resource Manager constructor.
     *
     * @param  \SimpleSquid\Vend\Vend  $vend
     */
    public function __construct(Vend $vend)
    {
        $this->vend = $vend;
    }

    /**
     * Get a collection of resources.
     *
     * @param  string  $collection
     * @param  string  $endpoint
     * @param  array   $query
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    private function collection(string $collection, string $endpoint, array $query = [])
    {
        $query = array_filter($query, function ($value) {
            return !is_null($value);
        });

        $response = $this->vend->get($endpoint, $query);

        $collection = new $collection($response['data']);

        if (property_exists($collection, 'version') && isset($response['version'])) {
            $collection->version = new Version($response['version']);
        }

        return $collection;
    }

    /**
     * Create a resource.
     *
     * @param  string  $resource
     * @param  string  $endpoint
     * @param  array   $body
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    private function createResource(string $resource, string $endpoint, array $body)
    {
        $response = $this->vend->post($endpoint, $body);

        return new $resource($response['data']);
    }

    /**
     * Delete a resource.
     *
     * @param  string  $endpoint
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
    private function deleteResource(string $endpoint): bool
    {
        $this->vend->delete($endpoint);

        return true;
    }

    /**
     * Get a single resource.
     *
     * @param  string  $resource
     * @param  string  $endpoint
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    private function single(string $resource, string $endpoint)
    {
        $response = $this->vend->get($endpoint);

        return new $resource($response['data']);
    }

    /**
     * Update a resource.
     *
     * @param  string  $resource
     * @param  string  $endpoint
     * @param  array   $body
     *
     * @return mixed
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    private function updateResource(string $resource, string $endpoint, array $body)
    {
        $response = $this->vend->put($endpoint, $body);

        return new $resource($response['data']);
    }
}