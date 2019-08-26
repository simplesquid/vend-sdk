<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Price Book
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class PriceBook extends DataTransferObject
{
    use CastsDates;

    /**
     * Customer Group
     *
     * @var CustomerGroup|null
     */
    public $customer_group;

    /**
     * The ID of the customer group
     *
     * @var string
     */
    public $customer_group_id;

    /**
     * Deletion timestamp in UTC.
     *
     * @var Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Price book name.
     *
     * @var string
     */
    public $name;

    /**
     * The ID of an outlet for which the price book should be used. **internal**
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * `"0"` - all platforms, `"1"` - in store, `"2"` - ecommerce.
     *
     * @var string|null
     */
    public $restrict_to_platform_key;

    /**
     * One of `In Store`, `Ecommerce`, `All Platforms`.
     *
     * @var string|null
     */
    public $restrict_to_platform_label;

    /**
     * The date when the price book becomes valid (active).
     *
     * @var Carbon|null
     */
    public $valid_from;

    /**
     * The date when the price book becomes invalid (inactive).
     *
     * @var Carbon|null
     */
    public $valid_to;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

}
