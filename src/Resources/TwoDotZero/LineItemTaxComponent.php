<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Line Item Tax Component.
 */
class LineItemTaxComponent extends DataTransferObject
{
    /**
     * Tax rate ID.
     *
     * @var string
     */
    public $rate_id;

    /**
     * Tax total.
     *
     * @var int|float
     */
    public $total_tax;
}
