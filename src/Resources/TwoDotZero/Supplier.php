<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Supplier.
 */
class Supplier extends DataTransferObject
{
    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Supplier's description. **deprecated**.
     *
     * @var string|null
     */
    public $description;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The Supplier name.
     *
     * @var string
     */
    public $name;

    /**
     * **internal** **deprecated**.
     *
     * @var string|null
     */
    public $source;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
