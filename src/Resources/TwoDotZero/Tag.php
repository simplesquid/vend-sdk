<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Tag
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Tag extends DataTransferObject
{
    /**
     * Deletion timestamp in UTC.
     *
     * @var string|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The Tag name.
     *
     * @var string
     */
    public $name;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

}
