<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateVariantAttribute
 */
class UpdateVariantAttribute extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/variant_attributes/{$this->attributeId}";
    }

    /**
     * @param  string  $attributeId The object identifier of the Variant Attribute to update.
     */
    public function __construct(
        protected string $attributeId,
    ) {
    }
}
