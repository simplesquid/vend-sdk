<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Consignments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateConsignmentByID
 *
 * Updates the given consignment.
 */
class UpdateConsignmentById extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/consignments/{$this->consignmentId}";
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function __construct(
        protected string $consignmentId,
    ) {
    }
}
