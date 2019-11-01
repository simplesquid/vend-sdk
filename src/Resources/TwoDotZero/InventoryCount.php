<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Inventory Count.
 */
class InventoryCount extends DataTransferObject
{
    use CastsDates;

    /**
     * The date for which the count is scheduled.
     *
     * @var \Carbon\Carbon|null
     */
    public $due_at;

    /**
     * An array of filter objects. Max 25.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\InventoryCountFilter[]|null
     */
    public $filters;

    /**
     * The name of the inventory count.
     *
     * @var string
     */
    public $name;

    /**
     * The ID of the outlet in which the count is taking place.
     *
     * @var string
     */
    public $outlet_id;

    /**
     * Indicates whether inactive products should be included in the count.
     *
     * @var bool|null
     */
    public $show_inactive;

    /**
     * The status of the inventory count.
     * One of: `STOCKTAKE_SCHEDULED`, `STOCKTAKE_IN_PROGRESS`, `STOCKTAKE_IN_PROGRESS_PROCESSED`, `STOCKTAKE_COMPLETE`.
     *
     * @var string
     */
    public $status;

    /**
     * Consignment type, for inventory counts always `STOCKTAKE`.
     *
     * @var string
     */
    public $type;
}
