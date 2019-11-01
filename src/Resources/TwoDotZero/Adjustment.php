<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Adjustment
 * An adjustment contains a modification to the sale price. For example, it can be a service fee (fee when the customer
 * pays by credit card) or a discount. The types defined here are the one used so far, but we reserve the right to add
 * others.
 */
class Adjustment extends DataTransferObject
{
    /**
     * Adjustment name.
     *
     * @var string
     */
    public $name;

    /**
     * The type of adjustment.
     * One of `NON_CASH_FEE`, `DISCOUNT`.
     *
     * @var string
     */
    public $type;

    /**
     * Adjustment value.
     *
     * @var string
     */
    public $value;
}
