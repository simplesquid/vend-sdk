<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Products\CreateProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\DeleteProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\DeleteProductFamily;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetInventoryForProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetPriceBooksForProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\ListProducts;
use SimpleSquid\Vend\TwoZero\Requests\Products\UploadImage;

class Products extends Resource
{
    public function createProduct(): Response
    {
        return $this->connector->send(new CreateProduct());
    }

    public function deleteProduct(
        string $productId,
    ): Response {
        return $this->connector->send(new DeleteProduct($productId));
    }

    public function deleteProductFamily(
        string $productId,
    ): Response {
        return $this->connector->send(new DeleteProductFamily($productId));
    }

    public function getInventoryForProduct(
        string $productId,
        ?int $after,
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new GetInventoryForProduct($productId, $after, $before, $pageSize));
    }

    public function getPriceBooksForProduct(
        string $productId,
    ): Response {
        return $this->connector->send(new GetPriceBooksForProduct($productId));
    }

    public function getProduct(
        string $productId,
    ): Response {
        return $this->connector->send(new GetProduct($productId));
    }

    public function listProducts(
        ?int $after,
        ?int $before,
        ?bool $deleted,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListProducts($after, $before, $deleted, $pageSize));
    }

    public function uploadImage(
        string $productId,
    ): Response {
        return $this->connector->send(new UploadImage($productId));
    }
}
