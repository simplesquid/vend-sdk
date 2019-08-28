<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCollection;

trait ManagesInventory
{
    /**
     * List inventory records.
     * Returns a paginated list of inventory records.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     *
     * @return InventoryCollection
     */
    public function inventory(int $page_size = null, int $after = null, int $before = null): InventoryCollection
    {
        return $this->collection(InventoryCollection::class, '2.0/inventory',
                                 compact('page_size', 'after', 'before'));
    }
}