<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListCustomFields extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/workflows/custom_fields';
    }

    public function __construct(
        protected string $entity,
    ) {
    }

    public function defaultQuery(): array
    {
        return [
            'entity' => $this->entity,
        ];
    }
}
