<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\CreateConsignmentProduct;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\CreateOrUpdateConsignmentProducts;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\DeleteProductFromConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\ListProductsByConsignmentId;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\UpdateProductInConsignment;

class ConsignmentProducts extends Resource
{
    public function listProductsByConsignmentId(string $consignmentId, ?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListProductsByConsignmentId($consignmentId, $before, $pageSize));
    }

    public function createConsignmentProduct(string $consignmentId): Response
    {
        return $this->connector->send(new CreateConsignmentProduct($consignmentId));
    }

    public function updateProductInConsignment(string $consignmentId, string $productId): Response
    {
        return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId));
    }

    public function deleteProductFromConsignment(string $consignmentId, string $productId): Response
    {
        return $this->connector->send(new DeleteProductFromConsignment($consignmentId, $productId));
    }

    public function createOrUpdateConsignmentProducts(string $consignmentId): Response
    {
        return $this->connector->send(new CreateOrUpdateConsignmentProducts($consignmentId));
    }
}
