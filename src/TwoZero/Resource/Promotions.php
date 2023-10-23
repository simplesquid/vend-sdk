<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ApplyDiscount;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\CreatePromotion;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotionById;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotionProducts;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\GetPromotionPromoCodes;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\ListPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\SearchPromotions;
use SimpleSquid\Vend\TwoZero\Requests\Promotions\UpdatePromotion;
use SimpleSquid\Vend\TwoZero\Resource;

class Promotions extends Resource
{
	public function applyDiscount(): Response
	{
		return $this->connector->send(new ApplyDiscount());
	}


	/**
	 * @param string $scope Scope of the search
	 * @param string $name Part of promotion's name being searched
	 * @param string $startDate Only show promotions that have a start date after or equal to this
	 * @param string $endDate Only show promotions that have an end date before or equal to this
	 * @param array $outletId Only show promotions linked to one or many of the outlets specified here
	 * @param string $direction Sort direction
	 * @param int $offset Offset
	 * @param int $pageSize Number of results per page
	 */
	public function searchPromotions(
		?string $scope,
		?string $name,
		?string $startDate,
		?string $endDate,
		?array $outletId,
		?string $direction,
		?int $offset,
		?int $pageSize,
	): Response
	{
		return $this->connector->send(new SearchPromotions($scope, $name, $startDate, $endDate, $outletId, $direction, $offset, $pageSize));
	}


	/**
	 * @param string $endTimeTo Upper limit for the promotion end date as UTC timestamp. Format: `2020-08-08T12:00:00Z`.
	 * @param string $endTimeFrom Lower limit for the promotion end date as UTC timestamp. Format: `2020-08-08T12:00:00Z`.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listPromotions(?string $endTimeTo, ?string $endTimeFrom, ?int $pageSize): Response
	{
		return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize));
	}


	public function createPromotion(): Response
	{
		return $this->connector->send(new CreatePromotion());
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function getPromotionById(string $promotionId): Response
	{
		return $this->connector->send(new GetPromotionById($promotionId));
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function updatePromotion(string $promotionId): Response
	{
		return $this->connector->send(new UpdatePromotion($promotionId));
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function getPromotionProducts(string $promotionId): Response
	{
		return $this->connector->send(new GetPromotionProducts($promotionId));
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function getPromotionPromoCodes(string $promotionId): Response
	{
		return $this->connector->send(new GetPromotionPromoCodes($promotionId));
	}
}
