<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateVariantAttribute extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/variant_attributes/{$this->attributeId}";
    }

    public function __construct(
        protected string $attributeId,
    ) {
    }
}
