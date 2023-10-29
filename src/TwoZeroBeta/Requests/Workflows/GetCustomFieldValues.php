<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCustomFieldValues extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/workflows/custom_fields/values';
    }

    public function __construct(
        protected string $entity,
        protected string $entityId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'entity' => $this->entity,
            'entity_id' => $this->entityId,
        ]);
    }
}
