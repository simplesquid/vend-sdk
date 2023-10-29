<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\AddCustomersToCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\CreateCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\DeleteCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\DeleteCustomersFromCustomerGroup;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\GetCustomerGroupById;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\GetCustomerGroupCustomers;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\ListCustomerGroups;
use SimpleSquid\Vend\TwoZero\Requests\CustomerGroups\UpdateCustomerGroup;

class CustomerGroups extends Resource
{
    public function listCustomerGroups(?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListCustomerGroups($before, $pageSize, $deleted));
    }

    public function createCustomerGroup(): Response
    {
        return $this->connector->send(new CreateCustomerGroup());
    }

    public function getCustomerGroupById(string $customerGroupId): Response
    {
        return $this->connector->send(new GetCustomerGroupById($customerGroupId));
    }

    public function updateCustomerGroup(string $customerGroupId): Response
    {
        return $this->connector->send(new UpdateCustomerGroup($customerGroupId));
    }

    public function deleteCustomerGroup(string $customerGroupId): Response
    {
        return $this->connector->send(new DeleteCustomerGroup($customerGroupId));
    }

    public function getCustomerGroupCustomers(string $customerGroupId, ?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new GetCustomerGroupCustomers($customerGroupId, $before, $pageSize));
    }

    public function addCustomersToCustomerGroup(string $customerGroupId): Response
    {
        return $this->connector->send(new AddCustomersToCustomerGroup($customerGroupId));
    }

    public function deleteCustomersFromCustomerGroup(string $customerGroupId): Response
    {
        return $this->connector->send(new DeleteCustomersFromCustomerGroup($customerGroupId));
    }
}
