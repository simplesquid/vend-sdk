<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Image Sample.
 */
class ImageSample extends DataTransferObject
{
    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Sizes. **undocumented**.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\ImageSizes|null
     */
    public $sizes;

    /**
     * URL of image.
     *
     * @var string|null
     */
    public $url;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
