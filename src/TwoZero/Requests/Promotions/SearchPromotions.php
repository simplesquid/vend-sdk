<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SearchPromotions
 *
 * This endpoint can be used to find promotions matching specific criteria.
 */
class SearchPromotions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotions/search";
	}


	/**
	 * @param null|string $scope Scope of the search
	 * @param null|string $name Part of promotion's name being searched
	 * @param null|string $startDate Only show promotions that have a start date after or equal to this
	 * @param null|string $endDate Only show promotions that have an end date before or equal to this
	 * @param null|array $outletId Only show promotions linked to one or many of the outlets specified here
	 * @param null|string $direction Sort direction
	 * @param null|int $offset Offset
	 * @param null|int $pageSize Number of results per page
	 */
	public function __construct(
		protected ?string $scope = null,
		protected ?string $name = null,
		protected ?string $startDate = null,
		protected ?string $endDate = null,
		protected ?array $outletId = null,
		protected ?string $direction = null,
		protected ?int $offset = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'scope' => $this->scope,
			'name' => $this->name,
			'start_date' => $this->startDate,
			'end_date' => $this->endDate,
			'outlet_id' => $this->outletId,
			'direction' => $this->direction,
			'offset' => $this->offset,
			'page_size' => $this->pageSize,
		]);
	}
}
