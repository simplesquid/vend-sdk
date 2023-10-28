<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomFields
 *
 * Returns the custom field definitions for a given entity type.
 */
class GetCustomFields extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/workflows/custom_fields';
    }

    /**
     * @param  string  $entity The entity type.
     */
    public function __construct(
        protected string $entity,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['entity' => $this->entity]);
    }
}
