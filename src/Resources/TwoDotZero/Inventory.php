<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Inventory.
 */
class Inventory extends DataTransferObject
{
    use CastsDates;

    /**
     * Average cost. **undocumented**.
     *
     * @var int|float|null
     */
    public $average_cost;

    /**
     * Current amount. **undocumented**.
     *
     * @var int|float|null
     */
    public $current_amount;

    /**
     * Deleted at. **undocumented**.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Current inventory level.
     *
     * @var int|float|null
     */
    public $inventory_level;

    /**
     * The ID of the outlet associated with this inventory record.
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * The ID of the product associated with this inventory record.
     *
     * @var string|null
     */
    public $product_id;

    /**
     * Amount to be added to the automatic stock order.
     *
     * @var int|float|null
     */
    public $reorder_amount;

    /**
     * Level at which a product should be automatically included in stock orders.
     *
     * @var int|float|null
     */
    public $reorder_point;

    /**
     * Auto-incrementing object version number. **undocumented**.
     *
     * @var int
     */
    public $version;
}
