<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Products\CreateProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\DeleteProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\DeleteProductFamily;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetInventoryByProductId;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetPriceBooksForProduct;
use SimpleSquid\Vend\TwoZero\Requests\Products\GetProductById;
use SimpleSquid\Vend\TwoZero\Requests\Products\ListProducts;
use SimpleSquid\Vend\TwoZero\Requests\Products\UploadImage;
use SimpleSquid\Vend\TwoZero\Resource;

class Products extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listProducts(?int $before, ?bool $deleted, ?int $pageSize): Response
    {
        return $this->connector->send(new ListProducts($before, $deleted, $pageSize));
    }

    public function createProduct(): Response
    {
        return $this->connector->send(new CreateProduct());
    }

    /**
     * @param  string  $productId The product id
     */
    public function getProductById(string $productId): Response
    {
        return $this->connector->send(new GetProductById($productId));
    }

    /**
     * @param  string  $productId The product id
     */
    public function deleteProduct(string $productId): Response
    {
        return $this->connector->send(new DeleteProduct($productId));
    }

    /**
     * @param  string  $productId The product id of a family member
     */
    public function deleteProductFamily(string $productId): Response
    {
        return $this->connector->send(new DeleteProductFamily($productId));
    }

    /**
     * @param  string  $productId The product id
     */
    public function uploadImage(string $productId): Response
    {
        return $this->connector->send(new UploadImage($productId));
    }

    /**
     * @param  string  $productId The product id
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function getInventoryByProductId(string $productId, ?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new GetInventoryByProductId($productId, $before, $pageSize));
    }

    /**
     * @param  string  $productId The product id to find in the Price Books
     */
    public function getPriceBooksForProduct(string $productId): Response
    {
        return $this->connector->send(new GetPriceBooksForProduct($productId));
    }
}
