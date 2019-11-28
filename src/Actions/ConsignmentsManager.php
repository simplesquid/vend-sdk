<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Consignment;
use SimpleSquid\Vend\Resources\TwoDotZero\ConsignmentCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCount;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCountItem;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCountItemCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCountItemRequest;
use SimpleSquid\Vend\Resources\ZeroDotNine\ConsignmentBase;
use SimpleSquid\Vend\Resources\ZeroDotNine\ConsignmentProduct;
use SimpleSquid\Vend\Resources\ZeroDotNine\ConsignmentProductBase;

class ConsignmentsManager
{
    use ManagesResources;

    /**
     * Create a consignment product.
     * Adds a new product to a consignment.
     *
     * @param  ConsignmentProductBase|array  $consignmentProduct
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\ConsignmentProduct
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function addProduct($consignmentProduct): ConsignmentProduct
    {
        if ($consignmentProduct instanceof ConsignmentProductBase) {
            $consignmentProduct = $consignmentProduct->toArray();
        }

        return $this->createResource(ConsignmentProduct::class, 'consignment_product', $consignmentProduct);
    }

    /**
     * Create a consignment.
     * Creates a new consignment.
     *
     * @param  ConsignmentBase|array  $consignment
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\Consignment
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create($consignment): \SimpleSquid\Vend\Resources\ZeroDotNine\Consignment
    {
        if ($consignment instanceof ConsignmentBase) {
            $consignment = $consignment->toArray();
        }

        return $this->createResource(\SimpleSquid\Vend\Resources\ZeroDotNine\Consignment::class, 'consignment', $consignment, null);
    }

    /**
     * Create an inventory count.
     * Creates a new consignment of type `STOCKTAKE`. Currently, this endpoint only supports creation of inventory counts (stock takes).
     *
     * @param  InventoryCount|array  $inventoryCount
     *
     * @return Consignment
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function createInventoryCount($inventoryCount): Consignment
    {
        if ($inventoryCount instanceof InventoryCount) {
            $inventoryCount = $inventoryCount->toArray();
        }

        return $this->createResource(Consignment::class, '2.0/consignments', $inventoryCount);
    }

    /**
     * Delete a consignment.
     * Deletes the consignment with the given ID.
     *
     * @param  string  $id  Valid consignment ID.
     *
     * @return bool
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function delete(string $id): bool
    {
        return $this->deleteResource("2.0/consignments/$id");
    }

    /**
     * Delete an item from an inventory count.
     * Removes the count for a specific product from the inventory count.
     *
     * @param  string  $consignment_id  Valid consignment (inventory count) ID.
     * @param  string  $product_id      The ID of a product included in the inventory count
     *
     * @return bool
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function deleteProduct(string $consignment_id, string $product_id): bool
    {
        return $this->deleteResource("2.0/consignments/$consignment_id/products/$product_id");
    }

    /**
     * Get a single consignment.
     * Returns a single consignment with the requested ID.
     *
     * @param  string  $id  Valid consignment ID.
     *
     * @return Consignment
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Consignment
    {
        return $this->single(Consignment::class, "2.0/consignments/$id");
    }

    /**
     * List consignments.
     * Returns a paginated list of consignments.
     *
     * @param  int|null     $page_size  The maximum number of items to be returned in the response.
     * @param  int|null     $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null     $before     The upper limit for the version numbers to be included in the response.
     * @param  string|null  $outlet_id  The ID of the outlet which the consignment is targeted at.
     * @param  string|null  $type       The type of consignments to be returned. One of `SUPPLIER`, `OUTLET`, `STOCKTAKE`.
     * @param  string|null  $status     The status of consignments to be returned. One of `RECEIVED`, `CANCELLED`, `OPEN`, `STOCKTAKE`, `SENT`, `STOCKTAKE_COMPLETE`, `STOCKTAKE_IN_PROGRESS`, `STOCKTAKE_SCHEDULED`, `STOCKTAKE_IN_PROGRESS_PROCESSED`.
     *
     * @return ConsignmentCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(
        int $page_size = null,
        int $after = null,
        int $before = null,
        string $outlet_id = null,
        string $type = null,
        string $status = null
    ): ConsignmentCollection {
        return $this->collection(ConsignmentCollection::class, '2.0/consignments',
                                 compact('after', 'before', 'page_size', 'outlet_id', 'type', 'status'));
    }

    /**
     * List all products for a specific consignment.
     * Returns a collection of consignment products associated with the specified consignment.
     *
     * @param  string    $consignment_id  The ID of the consignment for which products should be listed.
     * @param  int|null  $page_size       The maximum number of items to be returned in the response.
     * @param  int|null  $after           The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before          The upper limit for the version numbers to be included in the response.
     *
     * @return InventoryCountItemCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function products(
        string $consignment_id,
        int $page_size = null,
        int $after = null,
        int $before = null
    ): InventoryCountItemCollection {
        return $this->collection(InventoryCountItemCollection::class, "2.0/consignments/$consignment_id/products",
                                 compact('after', 'before', 'page_size'));
    }

    /**
     * Update a consignment.
     * Updates a consignment with the given ID.
     *
     * @param  string                 $id  The ID of the consignment to be updated.
     * @param  ConsignmentBase|array  $consignment
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\Consignment
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function update(string $id, $consignment): \SimpleSquid\Vend\Resources\ZeroDotNine\Consignment
    {
        if ($consignment instanceof ConsignmentBase) {
            $consignment = $consignment->toArray();
        }

        return $this->updateResource(\SimpleSquid\Vend\Resources\ZeroDotNine\Consignment::class, "consignment/$id", $consignment, null);
    }

    /**
     * Update an inventory count.
     * Updates the inventory count with requested ID.
     *
     * @param  string                $id  Valid consignment ID.
     * @param  InventoryCount|array  $inventoryCount
     *
     * @return Consignment
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function updateInventoryCount(string $id, $inventoryCount): Consignment
    {
        if ($inventoryCount instanceof InventoryCount) {
            $inventoryCount = $inventoryCount->toArray();
        }

        return $this->updateResource(Consignment::class, "2.0/consignments/$id", $inventoryCount);
    }

    /**
     * Adjust the inventory item count.
     * Increases or decreases the count for a specific product within the inventory count.
     *
     * @param  string                           $consignment_id  Valid consignment ID.
     * @param  InventoryCountItemRequest|array  $inventoryCountItem
     *
     * @return InventoryCountItem
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function updateInventoryCountItem(string $consignment_id, array $inventoryCountItem): InventoryCountItem
    {
        if ($inventoryCountItem instanceof InventoryCountItemRequest) {
            $inventoryCountItem = $inventoryCountItem->toArray();
        }

        return $this->updateResource(InventoryCountItem::class, "2.0/consignments/$consignment_id/products", $inventoryCountItem);
    }

    /**
     * Update a consignment product.
     * Updates an existing consignment product.
     *
     * @param  string                        $consignment_product_id  The ID of the consignment product to be updated.
     * @param  ConsignmentProductBase|array  $consignmentProduct
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\ConsignmentProduct
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function updateProduct(string $consignment_product_id, array $consignmentProduct): ConsignmentProduct
    {
        if ($consignmentProduct instanceof ConsignmentProductBase) {
            $consignmentProduct = $consignmentProduct->toArray();
        }

        return $this->updateResource(ConsignmentProduct::class, "consignment_product/$consignment_product_id", $consignmentProduct);
    }
}
