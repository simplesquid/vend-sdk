<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Customers\CreateUpdateCustomer;
use SimpleSquid\Vend\ZeroNine\Requests\Customers\ListCustomers;
use SimpleSquid\Vend\ZeroNine\Resource;

class Customers extends Resource
{
    /**
     * @param  string  $id If included, searches for customers with the given unique ID. The id option cannot be used with the `code` or `email` options.
     * @param  string  $code If included, searches for customers with the given customer code. The code option cannot be used with id or email options.
     * @param  string  $email If included, searches for customers with the given email address. This is an exact match search. The email option cannot be used with the id or code options.
     * @param  string  $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
     * @param  float|int  $page The number of the page of results to be returned.
     * @param  float|int  $pageSize The size of the page of results to be returned.
     */
    public function listCustomers(
        ?string $id,
        ?string $code,
        ?string $email,
        ?string $since,
        float|int|null $page,
        float|int|null $pageSize,
    ): Response {
        return $this->connector->send(new ListCustomers($id, $code, $email, $since, $page, $pageSize));
    }

    public function createUpdateCustomer(): Response
    {
        return $this->connector->send(new CreateUpdateCustomer());
    }
}
