<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Image Position.
 */
class ImagePosition extends DataTransferObject
{
    /**
     * New position for the image.
     *
     * @var int|float
     */
    public $position;
}
