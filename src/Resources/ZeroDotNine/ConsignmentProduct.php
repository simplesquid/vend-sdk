<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Consignment Product.
 */
class ConsignmentProduct extends DataTransferObject
{
    /**
     * The ID of the consignment associated with this item.
     *
     * @var string
     */
    public $consignment_id;

    /**
     * Supply cost of the item for this consignment.
     *
     * @var int|float|null
     */
    public $cost;

    /**
     * Quantity "ordered" for stock orders or "expected" for stock takes.
     *
     * @var int
     */
    public $count;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The ID of the product associated with this item.
     *
     * @var string
     */
    public $product_id;

    /**
     * Quantity "received" for stock orders or "counted" for stock takes.
     *
     * @var int|null
     */
    public $received;

    /**
     * Sequence order number for the item.
     *
     * @var int|null
     */
    public $sequence_number;
}
