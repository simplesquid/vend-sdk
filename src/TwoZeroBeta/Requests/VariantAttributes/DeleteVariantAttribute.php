<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteVariantAttribute extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/variant_attributes/{$this->attributeId}";
    }

    public function __construct(
        protected string $attributeId,
    ) {
    }
}
