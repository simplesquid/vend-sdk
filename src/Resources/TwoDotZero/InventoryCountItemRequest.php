<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Inventory Count Item Request.
 */
class InventoryCountItemRequest extends DataTransferObject
{
    /**
     * The ID of the product for which the count should be adjusted.
     *
     * @var string
     */
    public $product_id;

    /**
     * The adjustment value.
     *
     * @var string
     */
    public $received;
}
