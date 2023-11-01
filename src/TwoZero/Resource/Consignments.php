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
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createConsignment(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateConsignment($payload));
    }

    public function deleteConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new DeleteConsignment($consignmentId));
    }

    public function getConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new GetConsignment($consignmentId));
    }

    public function getConsignmentTotals(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new GetConsignmentTotals($consignmentId));
    }

    public function listConsignments(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListConsignments($after, $before, $pageSize));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateConsignment(
        string $consignmentId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateConsignment($consignmentId, $payload));
    }
}
