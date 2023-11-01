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
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createProduct(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateProduct($payload));
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
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
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
        ?int $after = null,
        ?int $before = null,
        ?bool $deleted = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListProducts($after, $before, $deleted, $pageSize));
    }

    /**
     * @param  \Psr\Http\Message\StreamInterface|resource|string  $file
     */
    public function uploadImage(
        string $productId,
        mixed $file,
    ): Response {
        return $this->connector->send(new UploadImage($productId, $file));
    }
}
