<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\CreateConsignmentProduct;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\CreateOrUpdateConsignmentProducts;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\DeleteProductFromConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\ListProductsByConsignmentId;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\UpdateProductInConsignment;
use SimpleSquid\Vend\TwoZero\Resource;

class ConsignmentProducts extends Resource
{
    /**
     * @param  string  $consignmentId The consignment id
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listProductsByConsignmentId(string $consignmentId, ?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListProductsByConsignmentId($consignmentId, $before, $pageSize));
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function createConsignmentProduct(string $consignmentId): Response
    {
        return $this->connector->send(new CreateConsignmentProduct($consignmentId));
    }

    /**
     * @param  string  $consignmentId The consignment id to be updated.
     * @param  string  $productId The product id of the product to be added to the consignment.
     */
    public function updateProductInConsignment(string $consignmentId, string $productId): Response
    {
        return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId));
    }

    /**
     * @param  string  $consignmentId The consignment id to be updated.
     * @param  string  $productId The product id of the product to be added to the consignment.
     */
    public function deleteProductFromConsignment(string $consignmentId, string $productId): Response
    {
        return $this->connector->send(new DeleteProductFromConsignment($consignmentId, $productId));
    }

    /**
     * @param  string  $consignmentId The consignment id
     */
    public function createOrUpdateConsignmentProducts(string $consignmentId): Response
    {
        return $this->connector->send(new CreateOrUpdateConsignmentProducts($consignmentId));
    }
}
