<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetVariantAttributes
 *
 * Retrieves a single Variant Attribute with the given id.
 */
class GetVariantAttributes extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/variant_attributes/{$this->attributeId}";
    }

    /**
     * @param  string  $attributeId The object identifier of the Variant Attribute to retrieve.
     * @param  null|bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function __construct(
        protected string $attributeId,
        protected ?bool $deleted = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['deleted' => $this->deleted]);
    }
}
