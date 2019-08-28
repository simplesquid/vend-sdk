<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Consignment;
use SimpleSquid\Vend\Resources\TwoDotZero\ConsignmentCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCountItem;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCountItemCollection;

trait ManagesConsignments
{
    /**
     * Get a single consignment.
     * Returns a single consignment with the requested ID.
     *
     * @param  string  $id  Valid consignment ID.
     * @return Consignment
     */
    public function consignment(string $id): Consignment
    {
        return $this->single(Consignment::class, "2.0/consignments/$id");
    }

    /**
     * List all products for a specific consignment.
     * Returns a collection of consignment products associated with the specified consignment.
     *
     * @param  string  $consignment_id  The ID of the consignment for which products should be listed.
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @return InventoryCountItemCollection
     */
    public function consignmentProducts(
        string $consignment_id,
        int $page_size = null,
        int $after = null,
        int $before = null
    ): InventoryCountItemCollection {
        return $this->collection(InventoryCountItemCollection::class, "2.0/consignments/$consignment_id/products",
                                 compact('after', 'before', 'page_size'));
    }

    /**
     * List consignments.
     * Returns a paginated list of consignments.
     *
     * @param  string|null  $outlet_id  The ID of the outlet which the consignment is targeted at.
     * @param  string|null  $type  The type of consignments to be returned. One of `SUPPLIER`, `OUTLET`, `STOCKTAKE`.
     * @param  string|null  $status  The status of consignments to be returned. One of `RECEIVED`, `CANCELLED`, `OPEN`, `STOCKTAKE`, `SENT`, `STOCKTAKE_COMPLETE`, `STOCKTAKE_IN_PROGRESS`, `STOCKTAKE_SCHEDULED`, `STOCKTAKE_IN_PROGRESS_PROCESSED`.
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @return ConsignmentCollection
     */
    public function consignments(
        string $outlet_id = null,
        string $type = null,
        string $status = null,
        int $page_size = null,
        int $after = null,
        int $before = null
    ): ConsignmentCollection {
        return $this->collection(ConsignmentCollection::class, "2.0/consignments", compact('after', 'before', 'page_size', 'outlet_id', 'type', 'status'));
    }

    /**
     * Create an inventory count.
     * Creates a new consignment of type `STOCKTAKE`. Currently, this endpoint only supports creation of inventory counts (stock takes).
     *
     * @param  array  $body  TODO: Could use InventoryCount object.
     * @return Consignment
     */
    public function createInventoryCount(array $body): Consignment
    {
        return $this->createResource(Consignment::class, '2.0/consignments', $body);
    }

    /**
     * Delete a consignment.
     * Deletes the consignment with the given ID.
     *
     * @param  string  $id  Valid consignment ID.
     * @return bool
     */
    public function deleteInventoryCount(string $id): bool
    {
        return $this->deleteResource("2.0/consignments/$id");
    }

    /**
     * Delete an item from an inventory count.
     * Removes the count for a specific product from the inventory count.
     *
     * @param  string  $consignment_id  Valid consignment (inventory count) ID.
     * @param  string  $product_id  The ID of a product included in the inventory count
     * @return bool
     */
    public function deleteInventoryCountItem(string $consignment_id, string $product_id): bool
    {
        return $this->deleteResource("2.0/consignments/$consignment_id/products/$product_id");
    }

    /**
     * Update an inventory count.
     * Updates the inventory count with requested ID.
     *
     * @param  string  $id  Valid consignment ID.
     * @param  array  $body  TODO: Could use InventoryCount object.
     * @return Consignment
     */
    public function updateInventoryCount(string $id, array $body): Consignment
    {
        return $this->updateResource(Consignment::class, "2.0/consignments/$id", $body);
    }

    /**
     * Adjust the inventory item count.
     * Increases or decreases the count for a specific product within the inventory count.
     *
     * @param  string  $consignment_id  Valid consignment ID.
     * @param  array  $body  TODO: Could use InventoryCountItemRequest object.
     * @return InventoryCountItem
     */
    public function updateInventoryCountItem(string $consignment_id, array $body): InventoryCountItem
    {
        return $this->updateResource(InventoryCountItem::class, "2.0/consignments/$consignment_id/products", $body);
    }
}