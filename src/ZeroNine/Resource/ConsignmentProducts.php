<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts\DeleteConsignmentProduct;
use SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts\GetConsignmentProductById;
use SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts\ListConsignmentProducts;
use SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts\NewConsignmentProduct;
use SimpleSquid\Vend\ZeroNine\Requests\ConsignmentProducts\UpdateConsignmentProduct;

class ConsignmentProducts extends Resource
{
    /**
     * @param  string  $consignmentId The ID of a consignment to filter the items for. Shouldn't be used together with the `product_id` parameter.
     * @param  string  $productId The ID of a product to filter the items for. Shouldn't be used together with the `consignment_id` parameter.
     * @param  float|int  $page The number of the page of results to be returned.
     * @param  float|int  $pageSize The size of the page of results to be returned.
     */
    public function listConsignmentProducts(
        string $consignmentId,
        string $productId,
        float|int|null $page,
        float|int|null $pageSize,
    ): Response {
        return $this->connector->send(new ListConsignmentProducts($consignmentId, $productId, $page, $pageSize));
    }

    public function newConsignmentProduct(): Response
    {
        return $this->connector->send(new NewConsignmentProduct());
    }

    /**
     * @param  string  $consignmentProductId The ID of the consignment to get.
     */
    public function getConsignmentProductById(string $consignmentProductId): Response
    {
        return $this->connector->send(new GetConsignmentProductById($consignmentProductId));
    }

    /**
     * @param  string  $consignmentProductId The ID of the consignment to be updated.
     */
    public function updateConsignmentProduct(string $consignmentProductId): Response
    {
        return $this->connector->send(new UpdateConsignmentProduct($consignmentProductId));
    }

    /**
     * @param  string  $consignmentProductId The ID of the consignment product to be deleted.
     */
    public function deleteConsignmentProduct(string $consignmentProductId): Response
    {
        return $this->connector->send(new DeleteConsignmentProduct($consignmentProductId));
    }
}
