<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Image.
 */
class Image extends DataTransferObject
{
    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Position of the image in collection of images associated with a product.
     *
     * @var int|float|null
     */
    public $position;

    /**
     * The ID of the product this image is associated with.
     *
     * @var string|null
     */
    public $product_id;

    /**
     * Status if the image upload processing. Can be `processing`, `uploaded`, `error`.
     *
     * @var string|null
     */
    public $status;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
