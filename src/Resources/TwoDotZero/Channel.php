<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Channel
 * An object representing a single channel.
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Channel extends DataTransferObject
{
    use CastsDates;

    /**
     * The type of channel this is.
     *
     * @var string
     */
    public $channel_type;

    /**
     * An RFC3339 representation of the time at which the channel was created.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * The Vend outlet ids that count towards inventory.
     *
     * @var array
     */
    public $inventory_outlet_ids;

    /**
     * The Vend payment type id that sale payments will be associated to.
     *
     * @var string
     */
    public $payment_type_id;

    /**
     * An RFC3339 representation of the time at which products were last imported.
     *
     * @var string
     */
    public $products_last_imported_at;

    /**
     * The Vend register id that sales will be associated to.
     *
     * @var string
     */
    public $register_id;

    /**
     * An RFC3339 representation of the time at which sales were last imported.
     *
     * @var string
     */
    public $sales_last_imported_at;

    /**
     * The store identifier.
     *
     * @var string
     */
    public $store_url;

}
