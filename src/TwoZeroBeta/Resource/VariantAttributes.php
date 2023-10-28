<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\CreateVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\DeleteVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\GetVariantAttributes;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\ListVariantAttributes;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\UpdateVariantAttribute;

class VariantAttributes extends Resource
{
    /**
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function listVariantAttributes(?bool $deleted): Response
    {
        return $this->connector->send(new ListVariantAttributes($deleted));
    }

    public function createVariantAttribute(): Response
    {
        return $this->connector->send(new CreateVariantAttribute());
    }

    /**
     * @param  string  $attributeId The object identifier of the Variant Attribute to retrieve.
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function getVariantAttributes(string $attributeId, ?bool $deleted): Response
    {
        return $this->connector->send(new GetVariantAttributes($attributeId, $deleted));
    }

    /**
     * @param  string  $attributeId The object identifier of the Variant Attribute to update.
     */
    public function updateVariantAttribute(string $attributeId): Response
    {
        return $this->connector->send(new UpdateVariantAttribute($attributeId));
    }

    /**
     * @param  string  $attributeId The object identifier of the Variant Attribute to delete.
     */
    public function deleteVariantAttribute(string $attributeId): Response
    {
        return $this->connector->send(new DeleteVariantAttribute($attributeId));
    }
}
