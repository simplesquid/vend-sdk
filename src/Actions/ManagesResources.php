<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Version;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\DataTransferObjectCollection;

trait ManagesResources
{
    private function collection(string $collection, string $endpoint, array $query = []): DataTransferObjectCollection
    {
        $query = array_filter($query, function ($value) {
            return !is_null($value);
        });

        $response = $this->get($endpoint, $query);

        $collection = new $collection($response['data']);

        if (property_exists($collection, 'version') && isset($response['version'])) {
            $collection->version = new Version($response['version']);
        }

        return $collection;
    }

    private function createResource(string $resource, string $endpoint, array $body): DataTransferObject
    {
        $response = $this->post($endpoint, $body);

        return new $resource($response['product']);
    }

    private function deleteResource(string $endpoint): bool
    {
        $this->delete($endpoint);

        return true;
    }

    private function single(string $resource, string $endpoint): DataTransferObject
    {
        $response = $this->get($endpoint);

        return new $resource($response['data']);
    }

    private function updateResource(string $resource, string $endpoint, array $body): DataTransferObject
    {
        $response = $this->put($endpoint, $body);

        return new $resource($response['product']);
    }
}