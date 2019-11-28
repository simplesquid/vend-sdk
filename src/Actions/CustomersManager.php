<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Customer;
use SimpleSquid\Vend\Resources\TwoDotZero\CustomerBase;
use SimpleSquid\Vend\Resources\TwoDotZero\CustomerCollection;

class CustomersManager
{
    use ManagesResources;

    /**
     * Create a new customer.
     * Creates a new customer.
     *
     * @param  CustomerBase|array  $customer
     *
     * @return Customer
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create($customer): Customer
    {
        if ($customer instanceof CustomerBase) {
            $customer = $customer->toArray();
        }

        return $this->createResource(Customer::class, '2.0/customers', $customer, 'data', 'data');
    }

    /**
     * Delete a customer.
     * Deletes the customer with the requested ID.
     *
     * @param  string  $id  Valid customer ID.
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
        return $this->deleteResource("2.0/customers/$id");
    }

    /**
     * Get a single customer.
     * Returns a single customer with a requested ID.
     *
     * @param  string  $id  Valid customer ID.
     *
     * @return Customer
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Customer
    {
        return $this->single(Customer::class, "2.0/customers/$id");
    }

    /**
     * List customers.
     * Returns a paginated list of customers.
     *
     * @param  int|null   $page_size  The maximum number of items to be returned in the response.
     * @param  int|null   $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null   $before     The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted    Indicates whether deleted items should be included in the response.
     *
     * @return CustomerCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(
        int $page_size = null,
        int $after = null,
        int $before = null,
        bool $deleted = null
    ): CustomerCollection {
        return $this->collection(CustomerCollection::class, '2.0/customers',
                                 compact('after', 'before', 'page_size', 'deleted'));
    }

    /**
     * Update a customer.
     * Updates the customer with the requested ID.
     *
     * @param  string              $id  Valid customer ID.
     * @param  CustomerBase|array  $customer
     *
     * @return Customer
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function update(string $id, $customer): Customer
    {
        if ($customer instanceof CustomerBase) {
            $customer = $customer->toArray();
        }

        return $this->updateResource(Customer::class, "2.0/customers/$id", $customer, 'data', 'data');
    }
}
