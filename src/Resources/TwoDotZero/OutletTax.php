<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Outlet Product Tax.
 */
class OutletTax extends DataTransferObject
{
    use CastsDates;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * The ID of the outlet this record is associated with.
     *
     * @var string
     */
    public $outlet_id;

    /**
     * The ID of the product this record is associated with.
     *
     * @var string
     */
    public $product_id;

    /**
     * The ID of the tax this record is associated with.
     *
     * @var string
     */
    public $tax_id;

    /**
     * Auto-incrementing object version number.
     *
     * @var int
     */
    public $version;
}
