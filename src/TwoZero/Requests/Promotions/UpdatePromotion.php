<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Promotions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdatePromotion
 *
 * This endpoint updates an existing promotion by ID.
 *
 *  * All of a promotion's fields except its id may
 * be updated.
 *  * There are no partial updates.
 *  * All fields must be specified in the update.
 *  * The
 * response contains the updated promotion object.
 */
class UpdatePromotion extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/promotions/{$this->promotionId}";
    }

    /**
     * @param  string  $promotionId The promotion id
     */
    public function __construct(
        protected string $promotionId,
    ) {
    }
}
