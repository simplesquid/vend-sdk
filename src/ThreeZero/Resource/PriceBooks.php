<?php

namespace SimpleSquid\Vend\ThreeZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\CreatePriceBook;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\GetPriceBook;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\ListPriceBooks;
use SimpleSquid\Vend\ThreeZero\Requests\PriceBooks\UpdatePriceBook;

class PriceBooks extends Resource
{
    public function listPriceBooks(
        ?int $after,
        ?int $before,
        ?int $pageSize,
        ?string $order,
        ?string $direction,
        ?bool $deleted,
        ?string $customerGroupId,
    ): Response {
        return $this->connector->send(new ListPriceBooks($after, $before, $pageSize, $order, $direction, $deleted, $customerGroupId));
    }

    /**
     * @param  string[]  $customerGroupIds
     * @param  string[]  $outletIds
     */
    public function createPriceBook(
        string $name,
        array $customerGroupIds,
        array $outletIds,
        string $validFrom = null,
        string $validTo = null,
        string $restrictToPlatform = null,
    ): Response {
        return $this->connector->send(new CreatePriceBook($name, $customerGroupIds, $outletIds, $validFrom, $validTo, $restrictToPlatform));
    }

    public function getPriceBook(
        string $id
    ): Response {
        return $this->connector->send(new GetPriceBook($id));
    }

    /**
     * @param  string[]  $customerGroupIds
     * @param  ?string[]  $outletIds
     */
    public function updatePriceBook(
        string $id,
        string $name,
        array $customerGroupIds,
        array $outletIds = null,
        string $validFrom = null,
        string $validTo = null,
        string $restrictToPlatform = null,
    ): Response {
        return $this->connector->send(new UpdatePriceBook($id, $name, $customerGroupIds, $outletIds, $validFrom, $validTo, $restrictToPlatform));
    }
}
