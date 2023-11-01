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
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createCustomer(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateCustomer($payload));
    }

    public function deleteCustomer(
        string $customerId,
    ): Response {
        return $this->connector->send(new DeleteCustomer($customerId));
    }

    public function getCustomer(
        string $customerId,
    ): Response {
        return $this->connector->send(new GetCustomer($customerId));
    }

    public function listCustomers(
        ?int $after,
        ?int $before,
        ?int $pageSize,
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new ListCustomers($after, $before, $pageSize, $deleted));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateCustomer(
        string $customerId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateCustomer($customerId, $payload));
    }
}
