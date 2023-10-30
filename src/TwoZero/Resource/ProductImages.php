<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\DeleteProductImage;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\GetProductImageData;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\SetImagePosition;

class ProductImages extends Resource
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

    public function setImagePosition(
        string $productImageId,
    ): Response {
        return $this->connector->send(new SetImagePosition($productImageId));
    }
}
