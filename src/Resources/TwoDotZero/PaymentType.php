<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Payment Type
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class PaymentType extends DataTransferObject
{
    use CastsDates;

    /**
     * Payment Type Config.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\PaymentTypeConfig|null
     */
    public $config;

    /**
     * The deletion timestamp.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * The name of the payment type.
     *
     * @var string
     */
    public $name;

    /**
     * The ID of the global Vend payment type. It shouldn't be used to identify the payment type - there may be multiple payment types with the same `type_id`.
     *
     * @var int
     */
    public $type_id;

    /**
     * Auto-incrementing object version number.
     *
     * @var int
     */
    public $version;

    /**
     * Gateway. **undocumented**
     *
     * @var bool|null
     */
    public $gateway;

    /**
     * Disabled. **undocumented**
     *
     * @var bool|null
     */
    public $disabled;

    /**
     * Internal. **undocumented**
     *
     * @var bool|null
     */
    public $internal;

    /**
     * Payment type. **undocumented**
     * TODO: Replace with an object.
     *
     * @var array|null
     */
    public $payment_type;
}
