<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPromotionProducts
 *
 * Get a list of products applicable for this promotion, and their discount price.
 *
 * It takes in
 * `page_size`, `offset` and `name` (use for searching product by product name) as query
 * parameters.
 *
 * The endpoint returns:
 *  * a list of products with discount for the condition product
 * set, and
 *  * another list for the action product sets.
 */
class GetPromotionProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotions/{$this->promotionId}/products";
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function __construct(
		protected string $promotionId,
	) {
	}
}
