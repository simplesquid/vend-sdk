<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPromotionPromoCodes
 *
 * Get the promo codes associated with this promotion.
 */
class GetPromotionPromoCodes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/promotions/{$this->promotionId}/promocodes";
    }

    /**
     * @param  string  $promotionId The promotion id
     */
    public function __construct(
        protected string $promotionId,
    ) {
    }
}
