<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Consignment
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Consignment extends DataTransferObject
{
    use CastsDates;

    /**
     * Consignment creation date.
     *
     * @var \Carbon\Carbon|null
     */
    public $consignment_date;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Due date.
     *
     * @var \Carbon\Carbon|null
     */
    public $due_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Consignment name.
     *
     * @var string|null
     */
    public $name;

    /**
     * A valid ID of an outlet where stock will be received.
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * The date when consignment was received.
     *
     * @var \Carbon\Carbon|null
     */
    public $received_at;

    /**
     * Order number.
     *
     * @var string|null
     */
    public $reference;

    /**
     * A valid ID of an outlet where stock will come from. **stock transfers only**
     *
     * @var string|null
     */
    public $source_outlet_id;

    /**
     * The consignment status.
     * One of `OPEN`, `RECEIVED`, `SENT`, `STOCKTAKE`, `STOCKTAKE_SCHEDULED`, `STOCKTAKE_IN_PROGRESS`, `STOCKTAKE_IN_PROGRESS_PROCESSED`, `STOCKTAKE_COMPLETE`, `CLOSED`, `CANCELLED`
     *
     * @var string|null
     */
    public $status;

    /**
     * A valid supplier ID.
     *
     * @var string|null
     */
    public $supplier_id;

    /**
     * Supplier invoice number.
     *
     * @var string|null
     */
    public $supplier_invoice;

    /**
     * The cost of items over the expected level.
     *
     * @var int|double|null
     */
    public $total_cost_gain;

    /**
     * The cost of items below the expected level.
     *
     * @var int|double|null
     */
    public $total_cost_loss;

    /**
     * The number of items over the expected level.
     *
     * @var int|double|null
     */
    public $total_count_gain;

    /**
     * The number of items below the expected level.
     *
     * @var int|double|null
     */
    public $total_count_loss;

    /**
     * Consignment type
     * One of `SUPPLIER`, `OUTLET`, `STOCKTAKE`, `RETURN`.
     *
     * @var string|null
     */
    public $type;

    /**
     * Last update timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $updated_at;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

}
