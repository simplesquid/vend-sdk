<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Customers\CreateCustomer;
use SimpleSquid\Vend\TwoZero\Requests\Customers\DeleteCustomerById;
use SimpleSquid\Vend\TwoZero\Requests\Customers\GetCustomerById;
use SimpleSquid\Vend\TwoZero\Requests\Customers\ListCustomers;
use SimpleSquid\Vend\TwoZero\Requests\Customers\UpdateCustomerById;

class Customers extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function listCustomers(?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListCustomers($before, $pageSize, $deleted));
    }

    public function createCustomer(): Response
    {
        return $this->connector->send(new CreateCustomer());
    }

    /**
     * @param  string  $customerId The customer id
     */
    public function getCustomerById(string $customerId): Response
    {
        return $this->connector->send(new GetCustomerById($customerId));
    }

    /**
     * @param  string  $customerId The customer id
     */
    public function updateCustomerById(string $customerId): Response
    {
        return $this->connector->send(new UpdateCustomerById($customerId));
    }

    /**
     * @param  string  $customerId The customer id
     */
    public function deleteCustomerById(string $customerId): Response
    {
        return $this->connector->send(new DeleteCustomerById($customerId));
    }
}
