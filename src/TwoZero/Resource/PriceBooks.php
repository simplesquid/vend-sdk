<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\AddPriceBookProducts;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\CreatePriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\DeletePriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\DeletePriceBookProducts;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\GetPriceBookbyId;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\GetPriceBookProductsForPriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\ListPriceBookProducts;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\ListPriceBooks;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\UpdatePriceBook;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\UpdatePriceBookProducts;
use SimpleSquid\Vend\TwoZero\Requests\PriceBooks\UpdatePriceBookProductsWithPutOp;

class PriceBooks extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listPriceBookProducts(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListPriceBookProducts($before, $pageSize));
    }

    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listPriceBooks(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListPriceBooks($before, $pageSize));
    }

    public function createPriceBook(): Response
    {
        return $this->connector->send(new CreatePriceBook());
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function getPriceBookbyId(string $priceBookId): Response
    {
        return $this->connector->send(new GetPriceBookbyId($priceBookId));
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function updatePriceBook(string $priceBookId): Response
    {
        return $this->connector->send(new UpdatePriceBook($priceBookId));
    }

    /**
     * @param  string  $priceBookId Valid Price Book ID.
     */
    public function deletePriceBook(string $priceBookId): Response
    {
        return $this->connector->send(new DeletePriceBook($priceBookId));
    }

    /**
     * @param  string  $priceBookId The price book id
     * @param  string  $productIds The product ids
     */
    public function getPriceBookProductsForPriceBook(string $priceBookId, ?string $productIds): Response
    {
        return $this->connector->send(new GetPriceBookProductsForPriceBook($priceBookId, $productIds));
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function updatePriceBookProductsWithPutOp(string $priceBookId): Response
    {
        return $this->connector->send(new UpdatePriceBookProductsWithPutOp($priceBookId));
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function addPriceBookProducts(string $priceBookId): Response
    {
        return $this->connector->send(new AddPriceBookProducts($priceBookId));
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function deletePriceBookProducts(string $priceBookId): Response
    {
        return $this->connector->send(new DeletePriceBookProducts($priceBookId));
    }

    /**
     * @param  string  $priceBookId The price book id
     */
    public function updatePriceBookProducts(string $priceBookId): Response
    {
        return $this->connector->send(new UpdatePriceBookProducts($priceBookId));
    }
}
