<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\CreateVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\DeleteVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\GetVariantAttribute;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\ListVariantAttributes;
use SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes\UpdateVariantAttribute;

class VariantAttributes extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createVariantAttribute(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateVariantAttribute($payload));
    }

    public function deleteVariantAttribute(
        string $attributeId,
    ): Response {
        return $this->connector->send(new DeleteVariantAttribute($attributeId));
    }

    public function getVariantAttribute(
        string $attributeId,
        ?bool $deleted = null,
    ): Response {
        return $this->connector->send(new GetVariantAttribute($attributeId, $deleted));
    }

    public function listVariantAttributes(
        ?bool $deleted = null,
    ): Response {
        return $this->connector->send(new ListVariantAttributes($deleted));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateVariantAttribute(
        string $attributeId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateVariantAttribute($attributeId, $payload));
    }
}
