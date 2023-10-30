<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ApplyDiscount;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\CreatePromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetProductsInPromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromoCodesForPromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ListPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\SearchPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\UpdatePromotion;

class Promotions extends Resource
{
    public function applyDiscount(): Response
    {
        return $this->connector->send(new ApplyDiscount());
    }

    public function createPromotion(): Response
    {
        return $this->connector->send(new CreatePromotion());
    }

    public function getProductsInPromotion(
        string $promotionId,
    ): Response {
        return $this->connector->send(new GetProductsInPromotion($promotionId));
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
        ?string $endTimeTo,
        ?string $endTimeFrom,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize));
    }

    public function searchPromotions(
        ?string $scope,
        ?string $name,
        ?string $startDate,
        ?string $endDate,
        ?array $outletId,
        ?string $direction,
        ?int $offset,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new SearchPromotions($scope, $name, $startDate, $endDate, $outletId, $direction,
            $offset, $pageSize));
    }

    public function updatePromotion(
        string $promotionId,
    ): Response {
        return $this->connector->send(new UpdatePromotion($promotionId));
    }
}
