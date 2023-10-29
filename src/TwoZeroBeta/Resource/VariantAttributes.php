<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\CreateVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\DeleteVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\GetVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\ListVariantAttributes;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\UpdateVariantAttribute;

class VariantAttributes extends Resource
{
    public function listVariantAttributes(
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new ListVariantAttributes($deleted));
    }

    public function createVariantAttribute(): Response
    {
        return $this->connector->send(new CreateVariantAttribute());
    }

    public function getVariantAttribute(
        string $attributeId,
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new GetVariantAttribute($attributeId, $deleted));
    }

    public function updateVariantAttribute(
        string $attributeId,
    ): Response {
        return $this->connector->send(new UpdateVariantAttribute($attributeId));
    }

    public function deleteVariantAttribute(
        string $attributeId,
    ): Response {
        return $this->connector->send(new DeleteVariantAttribute($attributeId));
    }
}
