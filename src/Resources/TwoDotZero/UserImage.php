<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * User Image
 * An object containing URLs for different sizes of the user’s avatar.
 */
class UserImage extends DataTransferObject
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
