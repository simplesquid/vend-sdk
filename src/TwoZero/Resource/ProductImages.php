<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\DeleteProductImageById;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\GetProductImageDataById;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\SetImagePosition;

class ProductImages extends Resource
{
    public function getProductImageDataById(string $productImageId): Response
    {
        return $this->connector->send(new GetProductImageDataById($productImageId));
    }

    public function setImagePosition(string $productImageId): Response
    {
        return $this->connector->send(new SetImagePosition($productImageId));
    }

    public function deleteProductImageById(string $productImageId): Response
    {
        return $this->connector->send(new DeleteProductImageById($productImageId));
    }
}
