<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\AddProductsToPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\DeletePriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\DeleteProductsFromPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\ListPriceBookProducts;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\ListProductsInPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\UpdateProductsInPriceBook;

class PriceBooks extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function addProductsToPriceBook(
        string $priceBookId,
        array $payload,
    ): Response {
        return $this->connector->send(new AddProductsToPriceBook($priceBookId, $payload));
    }

    public function deletePriceBook(
        string $priceBookId,
    ): Response {
        return $this->connector->send(new DeletePriceBook($priceBookId));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function deleteProductsFromPriceBook(
        string $priceBookId,
        array $payload,
    ): Response {
        return $this->connector->send(new DeleteProductsFromPriceBook($priceBookId, $payload));
    }

    public function listPriceBookProducts(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListPriceBookProducts($after, $before, $pageSize));
    }

    /**
     * @param  string[]  $productIds
     */
    public function listProductsInPriceBook(
        string $priceBookId,
        array $productIds = [],
    ): Response {
        return $this->connector->send(new ListProductsInPriceBook($priceBookId, $productIds));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateProductsInPriceBook(
        string $priceBookId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateProductsInPriceBook($priceBookId, $payload));
    }
}
