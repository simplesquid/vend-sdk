<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPromotionByID
 *
 * This will retrieve a single promotion using the given ID.
 */
class GetPromotionById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotions/{$this->promotionId}";
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function __construct(
		protected string $promotionId,
	) {
	}
}
