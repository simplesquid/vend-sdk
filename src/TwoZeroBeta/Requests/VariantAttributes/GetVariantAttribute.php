<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetVariantAttribute extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/variant_attributes/{$this->attributeId}";
    }

    public function __construct(
        protected string $attributeId,
        protected ?bool $deleted = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'deleted' => $this->deleted,
        ]);
    }
}
