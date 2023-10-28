<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetConsignmentByID
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.\s\s
 * \s\s
 * Returns
 * a single consignment with a given ID.
 */
class GetConsignmentById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/consignment/{$this->consignmentId}";
    }

    /**
     * @param  string  $consignmentId The ID of the consignment to get.
     */
    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
