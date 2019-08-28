<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Inventory Count Item
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class InventoryCountItem extends DataTransferObject
{
    use CastsDates;

    /**
     * The cost of the item.
     *
     * @var string
     */
    public $cost;

    /**
     * Expected item count.
     *
     * @var string
     */
    public $count;

    /**
     * The creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * The deletion timestamp in UTC.
     *
     * @var string
     */
    public $deleted_at;

    /**
     * Indicated whether the item was included via a filter. Can be `null`. For full count (no filters) always `true`.
     *
     * @var bool|null
     */
    public $is_included;

    /**
     * The ID of the product associated with this count item.
     *
     * @var string
     */
    public $product_id;

    /**
     * Product SKU.
     *
     * @var string|null
     */
    public $product_sku;

    /**
     * Observed item count.
     *
     * @var string
     */
    public $received;

    /**
     * The status of the item.
     * One of: `PENDING`, `SUCCESS`.
     *
     * @var string
     */
    public $status;

    /**
     * Last update timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $updated_at;

    /**
     * Auto-incrementing object version number.
     *
     * @var int
     */
    public $version;

}
