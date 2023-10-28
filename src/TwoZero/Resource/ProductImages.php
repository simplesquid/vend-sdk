<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\DeleteProductImageById;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\GetProductImageDataById;
use SimpleSquid\Vend\TwoZero\Requests\ProductImages\SetImagePosition;

class ProductImages extends Resource
{
    /**
     * @param  string  $productImageId The product image id
     */
    public function getProductImageDataById(string $productImageId): Response
    {
        return $this->connector->send(new GetProductImageDataById($productImageId));
    }

    /**
     * @param  string  $productImageId The product image id
     */
    public function setImagePosition(string $productImageId): Response
    {
        return $this->connector->send(new SetImagePosition($productImageId));
    }

    /**
     * @param  string  $productImageId The product image id
     */
    public function deleteProductImageById(string $productImageId): Response
    {
        return $this->connector->send(new DeleteProductImageById($productImageId));
    }
}
