<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\CreateConsignment;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\DeleteConsignment;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\GetConsignment;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\GetConsignmentTotals;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\ListConsignments;
use SimpleSquid\Vend\TwoZero\Requests\Consignments\UpdateConsignment;

class Consignments extends Resource
{
    public function listConsignments(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListConsignments($before, $pageSize));
    }

    public function createConsignment(): Response
    {
        return $this->connector->send(new CreateConsignment());
    }

    public function getConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new GetConsignment($consignmentId));
    }

    public function updateConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new UpdateConsignment($consignmentId));
    }

    public function deleteConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new DeleteConsignment($consignmentId));
    }

    public function getConsignmentTotals(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new GetConsignmentTotals($consignmentId));
    }
}
