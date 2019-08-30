<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Tax Base
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class TaxBase extends DataTransferObject
{
    /**
     * Tax name.
     *
     * @var string
     */
    public $name;

    /**
     * Tax rate. `0.1 = 10%`.
     *
     * @var int|double
     */
    public $rate;

}
