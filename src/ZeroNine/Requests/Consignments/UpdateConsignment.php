<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateConsignment
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Updates a
 * consignment with the given ID.
 */
class UpdateConsignment extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/consignment/{$this->consignmentId}";
    }

    /**
     * @param  string  $consignmentId The ID of the consignment to be updated.
     */
    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
