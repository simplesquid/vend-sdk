<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Registers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListRegisters
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * non-paginated list of registers.
 */
class ListRegisters extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/registers';
    }

    /**
     * @param  null|bool  $deleted Indicates whether deleted items should be included in the result.
     */
    public function __construct(
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['deleted' => $this->deleted]);
    }
}
