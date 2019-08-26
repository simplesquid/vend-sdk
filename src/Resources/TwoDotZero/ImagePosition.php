<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Image Position
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class ImagePosition extends DataTransferObject
{
    /**
     * New position for the image.
     *
     * @var int|double
     */
    public $position;

}
