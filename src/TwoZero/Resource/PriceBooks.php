<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\AddProductsToPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\DeletePriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\DeleteProductsFromPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\ListPriceBookProducts;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\ListProductsInPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\UpdateProductsInPriceBook;

class PriceBooks extends Resource
{
    public function addProductsToPriceBook(
        string $priceBookId,
    ): Response {
        return $this->connector->send(new AddProductsToPriceBook($priceBookId));
    }

    public function deletePriceBook(
        string $priceBookId,
    ): Response {
        return $this->connector->send(new DeletePriceBook($priceBookId));
    }

    public function deleteProductsFromPriceBook(
        string $priceBookId,
    ): Response {
        return $this->connector->send(new DeleteProductsFromPriceBook($priceBookId));
    }

    public function listPriceBookProducts(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListPriceBookProducts($before, $pageSize));
    }

    public function listProductsInPriceBook(
        string $priceBookId,
        ?string $productIds,
    ): Response {
        return $this->connector->send(new ListProductsInPriceBook($priceBookId, $productIds));
    }

    public function updateProductsInPriceBook(
        string $priceBookId,
    ): Response {
        return $this->connector->send(new UpdateProductsInPriceBook($priceBookId));
    }
}
