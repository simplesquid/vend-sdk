<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\AddProductToConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\BulkUpdateProductsInConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\DeleteProductFromConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\ListProductsInConsignment;
use SimpleSquid\Vend\TwoZero\Requests\ConsignmentProducts\UpdateProductInConsignment;

class ConsignmentProducts extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function addProductToConsignment(
        string $consignmentId,
        array $payload,
    ): Response {
        return $this->connector->send(new AddProductToConsignment($consignmentId, $payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function bulkUpdateProductsInConsignment(
        string $consignmentId,
        array $payload,
    ): Response {
        return $this->connector->send(new BulkUpdateProductsInConsignment($consignmentId, $payload));
    }

    public function deleteProductFromConsignment(
        string $consignmentId,
        string $productId,
    ): Response {
        return $this->connector->send(new DeleteProductFromConsignment($consignmentId, $productId));
    }

    public function listProductsInConsignment(
        string $consignmentId,
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListProductsInConsignment($consignmentId, $after, $before, $pageSize));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateProductInConsignment(
        string $consignmentId,
        string $productId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId, $payload));
    }
}
