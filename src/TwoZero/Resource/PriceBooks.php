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
    public function listPriceBookProducts(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListPriceBookProducts($before, $pageSize));
    }

    public function listPriceBooks(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListPriceBooks($before, $pageSize));
    }

    public function createPriceBook(): Response
    {
        return $this->connector->send(new CreatePriceBook());
    }

    public function getPriceBookbyId(string $priceBookId): Response
    {
        return $this->connector->send(new GetPriceBookbyId($priceBookId));
    }

    public function updatePriceBook(string $priceBookId): Response
    {
        return $this->connector->send(new UpdatePriceBook($priceBookId));
    }

    public function deletePriceBook(string $priceBookId): Response
    {
        return $this->connector->send(new DeletePriceBook($priceBookId));
    }

    public function getPriceBookProductsForPriceBook(string $priceBookId, ?string $productIds): Response
    {
        return $this->connector->send(new GetPriceBookProductsForPriceBook($priceBookId, $productIds));
    }

    public function updatePriceBookProductsWithPutOp(string $priceBookId): Response
    {
        return $this->connector->send(new UpdatePriceBookProductsWithPutOp($priceBookId));
    }

    public function addPriceBookProducts(string $priceBookId): Response
    {
        return $this->connector->send(new AddPriceBookProducts($priceBookId));
    }

    public function deletePriceBookProducts(string $priceBookId): Response
    {
        return $this->connector->send(new DeletePriceBookProducts($priceBookId));
    }

    public function updatePriceBookProducts(string $priceBookId): Response
    {
        return $this->connector->send(new UpdatePriceBookProducts($priceBookId));
    }
}
