<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Price Book Base
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class PriceBookBase extends DataTransferObject
{
    use CastsDates;

    /**
     * The ID of the customer group
     *
     * @var string
     */
    public $customer_group_id;

    /**
     * Price book name.
     *
     * @var string
     */
    public $name;

    /**
     * The ID of an outlet for which the price book should be used.
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

}
