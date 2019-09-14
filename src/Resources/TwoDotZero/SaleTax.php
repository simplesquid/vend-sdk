<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Sale Tax
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class SaleTax extends DataTransferObject
{
    /**
     * ID **undocumented**
     *
     * @var string|null
     */
    public $id;

    /**
     * Tax amount.
     *
     * @var int|double|null
     */
    public $amount;

    /**
     * Tax name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Tax rate.
     *
     * @var int|double|null
     */
    public $rate;

}
