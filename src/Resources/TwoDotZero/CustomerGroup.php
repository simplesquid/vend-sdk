<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Customer Group
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class CustomerGroup extends DataTransferObject
{
    use CastsDates;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * The customer group identifier.
     *
     * @var string|null
     */
    public $group_id;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The customer group name.
     *
     * @var string
     */
    public $name;

    /**
     * Last update timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $updated_at;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

}
