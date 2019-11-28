<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Version
 * An object containing the highest and lowest version numbers for all items of the returned collection.
 */
class Version extends DataTransferObject
{
    /**
     * Highest version number of the payload.
     *
     * @var int|null
     */
    public $max;

    /**
     * Lowest version number of the payload.
     *
     * @var int|null
     */
    public $min;
}
