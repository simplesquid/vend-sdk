<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Image Sizes **undocumented**
 * An object containing URLs for different sizes of an image.
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class ImageSizes extends DataTransferObject
{
    /**
     * Original.
     *
     * @var string|null
     */
    public $original;

    /**
     * SL.
     *
     * @var string|null
     */
    public $sl;

    /**
     * SM.
     *
     * @var string|null
     */
    public $sm;

    /**
     * SS.
     *
     * @var string|null
     */
    public $ss;

    /**
     * ST.
     *
     * @var string|null
     */
    public $st;

    /**
     * Standard.
     *
     * @var string|null
     */
    public $standard;

    /**
     * Thumbnail.
     *
     * @var string|null
     */
    public $thumb;

}
