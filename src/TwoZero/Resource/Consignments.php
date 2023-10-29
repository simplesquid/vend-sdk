<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\CreateConsignment;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\DeleteConsignmentById;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\GetConsignmentById;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\GetConsignments;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\ListConsignmentTotals;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\UpdateConsignmentById;

class Consignments extends Resource
{
    public function getConsignments(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new GetConsignments($before, $pageSize));
    }

    public function createConsignment(): Response
    {
        return $this->connector->send(new CreateConsignment());
    }

    public function getConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new GetConsignmentById($consignmentId));
    }

    public function updateConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new UpdateConsignmentById($consignmentId));
    }

    public function deleteConsignmentById(string $consignmentId): Response
    {
        return $this->connector->send(new DeleteConsignmentById($consignmentId));
    }

    public function listConsignmentTotals(string $consignmentId): Response
    {
        return $this->connector->send(new ListConsignmentTotals($consignmentId));
    }
}
