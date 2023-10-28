<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\CreateConsignment;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\DeleteConsignmentById;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\GetConsignmentById;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\GetConsignments;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\ListConsignmentTotals;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\UpdateConsignmentById;
use SimpleSquid\Vend\TwoZero\Resource;

class Consignments extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function getConsignments(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new GetConsignments($before, $pageSize));
    }

    public function createConsignment(): Response
    {
        return $this->connector->send(new CreateConsignment());
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function getConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new GetConsignmentById($consignmentId));
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function updateConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new UpdateConsignmentById($consignmentId));
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function deleteConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new DeleteConsignmentById($consignmentId));
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function listConsignmentTotals(string $consignmentId): Response
    {
        return $this->connector->send(new ListConsignmentTotals($consignmentId));
    }
}
