<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Products\CreateProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\DeleteProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\DeleteProductFamily;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetInventoryByProductId;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetPriceBooksForProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetProductById;
use SimpleSquid\Vend\TwoZero\Requests\Products\ListProducts;
use SimpleSquid\Vend\TwoZero\Requests\Products\UploadImage;

class Products extends Resource
{
    public function listProducts(?int $before, ?bool $deleted, ?int $pageSize): Response
    {
        return $this->connector->send(new ListProducts($before, $deleted, $pageSize));
    }

    public function createProduct(): Response
    {
        return $this->connector->send(new CreateProduct());
    }

    public function getProductById(string $productId): Response
    {
        return $this->connector->send(new GetProductById($productId));
    }

    public function deleteProduct(string $productId): Response
    {
        return $this->connector->send(new DeleteProduct($productId));
    }

    public function deleteProductFamily(string $productId): Response
    {
        return $this->connector->send(new DeleteProductFamily($productId));
    }

    public function uploadImage(string $productId): Response
    {
        return $this->connector->send(new UploadImage($productId));
    }

    public function getInventoryByProductId(string $productId, ?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new GetInventoryByProductId($productId, $before, $pageSize));
    }

    public function getPriceBooksForProduct(string $productId): Response
    {
        return $this->connector->send(new GetPriceBooksForProduct($productId));
    }
}
