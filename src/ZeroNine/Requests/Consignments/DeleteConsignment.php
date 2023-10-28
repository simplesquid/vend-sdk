<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteConsignment
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Deletes the
 * consignment with a given ID.
 */
class DeleteConsignment extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/consignment/{$this->consignmentId}";
    }

    /**
     * @param  string  $consignmentId The ID of the consignment to be deleted
     */
    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
