<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteVariantAttribute
 *
 * Note you can't delete a variant attribute that is currently being used by a family.
 */
class DeleteVariantAttribute extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/variant_attributes/{$this->attributeId}";
    }

    /**
     * @param  string  $attributeId The object identifier of the Variant Attribute to delete.
     */
    public function __construct(
        protected string $attributeId,
    ) {
    }
}
