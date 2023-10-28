<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Consignments\DeleteConsignment;
use SimpleSquid\Vend\ZeroNine\Requests\Consignments\GetConsignmentById;
use SimpleSquid\Vend\ZeroNine\Requests\Consignments\ListConsignments;
use SimpleSquid\Vend\ZeroNine\Requests\Consignments\NewConsignment;
use SimpleSquid\Vend\ZeroNine\Requests\Consignments\UpdateConsignment;
use SimpleSquid\Vend\ZeroNine\Resource;

class Consignments extends Resource
{
    /**
     * @param  string  $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
     * @param  float|int  $page The number of the page of results to be returned.
     * @param  float|int  $pageSize The size of the page of results to be returned.
     */
    public function listConsignments(?string $since, float|int|null $page, float|int|null $pageSize): Response
    {
        return $this->connector->send(new ListConsignments($since, $page, $pageSize));
    }

    public function newConsignment(): Response
    {
        return $this->connector->send(new NewConsignment());
    }

    /**
     * @param  string  $consignmentId The ID of the consignment to get.
     */
    public function getConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new GetConsignmentById($consignmentId));
    }

    /**
     * @param  string  $consignmentId The ID of the consignment to be updated.
     */
    public function updateConsignment(string $consignmentId): Response
    {
        return $this->connector->send(new UpdateConsignment($consignmentId));
    }

    /**
     * @param  string  $consignmentId The ID of the consignment to be deleted
     */
    public function deleteConsignment(string $consignmentId): Response
    {
        return $this->connector->send(new DeleteConsignment($consignmentId));
    }
}
