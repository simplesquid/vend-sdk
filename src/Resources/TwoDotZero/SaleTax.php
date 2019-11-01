<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Sale Tax.
 */
class SaleTax extends DataTransferObject
{
    /**
     * Tax amount.
     *
     * @var int|float|null
     */
    public $amount;

    /**
     * ID **undocumented**.
     *
     * @var string|null
     */
    public $id;

    /**
     * Tax name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Tax rate.
     *
     * @var int|float|null
     */
    public $rate;
}
