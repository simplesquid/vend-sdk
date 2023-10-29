<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\AddProductToConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\BulkUpdateProductsInConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\DeleteProductFromConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\ListProductsInConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\UpdateProductInConsignment;

class ConsignmentProducts extends Resource
{
    public function listProductsInConsignment(
        string $consignmentId,
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListProductsInConsignment($consignmentId, $before, $pageSize));
    }

    public function addProductToConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new AddProductToConsignment($consignmentId));
    }

    public function updateProductInConsignment(
        string $consignmentId,
        string $productId,
    ): Response {
        return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId));
    }

    public function deleteProductFromConsignment(
        string $consignmentId,
        string $productId,
    ): Response {
        return $this->connector->send(new DeleteProductFromConsignment($consignmentId, $productId));
    }

    public function bulkUpdateProductsInConsignment(
        string $consignmentId,
    ): Response {
        return $this->connector->send(new BulkUpdateProductsInConsignment($consignmentId));
    }
}
