<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Line Item Tax Component
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
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
     * @var int|double
     */
    public $total_tax;

}
