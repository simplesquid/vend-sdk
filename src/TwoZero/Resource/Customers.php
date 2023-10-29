<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Customers\CreateCustomer;
use SimpleSquid\Vend\TwoZero\Requests\Customers\DeleteCustomerById;
use SimpleSquid\Vend\TwoZero\Requests\Customers\GetCustomerById;
use SimpleSquid\Vend\TwoZero\Requests\Customers\ListCustomers;
use SimpleSquid\Vend\TwoZero\Requests\Customers\UpdateCustomerById;

class Customers extends Resource
{
    public function listCustomers(?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListCustomers($before, $pageSize, $deleted));
    }

    public function createCustomer(): Response
    {
        return $this->connector->send(new CreateCustomer());
    }

    public function getCustomerById(string $customerId): Response
    {
        return $this->connector->send(new GetCustomerById($customerId));
    }

    public function updateCustomerById(string $customerId): Response
    {
        return $this->connector->send(new UpdateCustomerById($customerId));
    }

    public function deleteCustomerById(string $customerId): Response
    {
        return $this->connector->send(new DeleteCustomerById($customerId));
    }
}
