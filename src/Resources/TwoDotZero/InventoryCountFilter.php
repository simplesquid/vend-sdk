<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Inventory Count Filter
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class InventoryCountFilter extends DataTransferObject
{
    /**
     * Filter type.
     * One of `product_type`, `brand`, `supplier`, `tag`, `product`.
     *
     * @var string
     */
    public $type;

    /**
     * The ID of the filter object.
     *
     * @var string
     */
    public $value;

}
