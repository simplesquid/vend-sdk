<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\AddCustomersToCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\CreateCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\DeleteCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\DeleteCustomersFromCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\GetCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\GetCustomersInCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\ListCustomerGroups;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\UpdateCustomerGroup;

class CustomerGroups extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function addCustomersToCustomerGroup(
        string $customerGroupId,
        array $payload,
    ): Response {
        return $this->connector->send(new AddCustomersToCustomerGroup($customerGroupId, $payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createCustomerGroup(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateCustomerGroup($payload));
    }

    public function deleteCustomerGroup(
        string $customerGroupId,
    ): Response {
        return $this->connector->send(new DeleteCustomerGroup($customerGroupId));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function deleteCustomersFromCustomerGroup(
        string $customerGroupId,
        array $payload,
    ): Response {
        return $this->connector->send(new DeleteCustomersFromCustomerGroup($customerGroupId, $payload));
    }

    public function getCustomerGroup(string $customerGroupId): Response
    {
        return $this->connector->send(new GetCustomerGroup($customerGroupId));
    }

    public function getCustomersInCustomerGroup(
        string $customerGroupId,
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new GetCustomersInCustomerGroup($customerGroupId, $after, $before, $pageSize));
    }

    public function listCustomerGroups(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
        ?bool $deleted = null,
    ): Response {
        return $this->connector->send(new ListCustomerGroups($after, $before, $pageSize, $deleted));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateCustomerGroup(
        string $customerGroupId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateCustomerGroup($customerGroupId, $payload));
    }
}
