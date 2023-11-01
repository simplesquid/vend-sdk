<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ApplyDiscount;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\CreatePromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetProductsInPromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromoCodesForPromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ListPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\SearchPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\UpdatePromotion;

class Promotions extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function applyDiscount(
        array $payload,
    ): Response {
        return $this->connector->send(new ApplyDiscount($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createPromotion(
        array $payload,
    ): Response {
        return $this->connector->send(new CreatePromotion($payload));
    }

    public function getProductsInPromotion(
        string $promotionId,
        ?string $name = null,
        ?int $offset = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new GetProductsInPromotion($promotionId, $name, $offset, $pageSize));
    }

    public function getPromoCodesForPromotion(
        string $promotionId,
    ): Response {
        return $this->connector->send(new GetPromoCodesForPromotion($promotionId));
    }

    public function getPromotion(
        string $promotionId,
    ): Response {
        return $this->connector->send(new GetPromotion($promotionId));
    }

    public function listPromotions(
        ?string $endTimeTo = null,
        ?string $endTimeFrom = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize));
    }

    /**
     * @param  null|string[]  $outletIds
     */
    public function searchPromotions(
        ?string $scope = null,
        ?string $name = null,
        ?string $startDate = null,
        ?string $endDate = null,
        ?array $outletIds = null,
        ?string $orderBy = null,
        ?string $direction = null,
        ?int $offset = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new SearchPromotions(
            $scope,
            $name,
            $startDate,
            $endDate,
            $outletIds,
            $orderBy,
            $direction,
            $offset,
            $pageSize,
        ));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updatePromotion(
        string $promotionId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdatePromotion($promotionId, $payload));
    }
}
