<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Outlets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetOutletByID
 *
 * Returns a single outlet with the requested ID.
 */
class GetOutletById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/outlets/{$this->outletId}";
    }

    /**
     * @param  string  $outletId The outlet id
     */
    public function __construct(
        protected string $outletId,
    ) {
    }
}
