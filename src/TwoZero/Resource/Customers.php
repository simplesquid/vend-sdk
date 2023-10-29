<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Customers\CreateCustomer;
use SimpleSquid\Vend\TwoZero\Requests\Customers\DeleteCustomer;
use SimpleSquid\Vend\TwoZero\Requests\Customers\GetCustomer;
use SimpleSquid\Vend\TwoZero\Requests\Customers\ListCustomers;
use SimpleSquid\Vend\TwoZero\Requests\Customers\UpdateCustomer;

class Customers extends Resource
{
    public function listCustomers(
        ?int $before,
        ?int $pageSize,
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new ListCustomers($before, $pageSize, $deleted));
    }

    public function createCustomer(): Response
    {
        return $this->connector->send(new CreateCustomer());
    }

    public function getCustomer(
        string $customerId,
    ): Response {
        return $this->connector->send(new GetCustomer($customerId));
    }

    public function updateCustomer(
        string $customerId,
    ): Response {
        return $this->connector->send(new UpdateCustomer($customerId));
    }

    public function deleteCustomer(
        string $customerId,
    ): Response {
        return $this->connector->send(new DeleteCustomer($customerId));
    }
}
