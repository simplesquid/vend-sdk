<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ApplyDiscount;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\CreatePromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotionById;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotionProducts;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotionPromoCodes;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ListPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\SearchPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\UpdatePromotion;

class Promotions extends Resource
{
    public function applyDiscount(): Response
    {
        return $this->connector->send(new ApplyDiscount());
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
        return $this->connector->send(new SearchPromotions($scope, $name, $startDate, $endDate, $outletId, $direction, $offset, $pageSize));
    }

    public function listPromotions(?string $endTimeTo, ?string $endTimeFrom, ?int $pageSize): Response
    {
        return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize));
    }

    public function createPromotion(): Response
    {
        return $this->connector->send(new CreatePromotion());
    }

    public function getPromotionById(string $promotionId): Response
    {
        return $this->connector->send(new GetPromotionById($promotionId));
    }

    public function updatePromotion(string $promotionId): Response
    {
        return $this->connector->send(new UpdatePromotion($promotionId));
    }

    public function getPromotionProducts(string $promotionId): Response
    {
        return $this->connector->send(new GetPromotionProducts($promotionId));
    }

    public function getPromotionPromoCodes(string $promotionId): Response
    {
        return $this->connector->send(new GetPromotionPromoCodes($promotionId));
    }
}
