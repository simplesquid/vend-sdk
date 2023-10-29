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
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
        ?string $order = null,
        ?string $direction = null,
        ?bool $deleted = null,
        ?string $customerGroupId = null,
    ): Response {
        return $this->connector->send(new ListPriceBooks($after, $before, $pageSize, $order, $direction, $deleted, $customerGroupId));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createPriceBook(
        array $payload,
    ): Response {
        return $this->connector->send(new CreatePriceBook($payload));
    }

    public function getPriceBook(
        string $id,
    ): Response {
        return $this->connector->send(new GetPriceBook($id));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updatePriceBook(
        string $id,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdatePriceBook($id, $payload));
    }
}
