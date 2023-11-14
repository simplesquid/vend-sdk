<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\DeleteProductImage;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\GetProductImageData;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\SetImagePosition;

class ProductImages extends BaseResource
{
    public function deleteProductImage(
        string $productImageId,
    ): Response {
        return $this->connector->send(new DeleteProductImage($productImageId));
    }

    public function getProductImageData(
        string $productImageId,
    ): Response {
        return $this->connector->send(new GetProductImageData($productImageId));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function setImagePosition(
        string $productImageId,
        array $payload,
    ): Response {
        return $this->connector->send(new SetImagePosition($productImageId, $payload));
    }
}