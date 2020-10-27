<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Payment.
 */
class Payment extends DataTransferObject
{
    /**
     * Payment amount.
     *
     * @var int|float|null
     */
    public $amount;

    /**
     * Payment type name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Payment date in UTC.
     *
     * @var string|null
     */
    public $payment_date;

    /**
     * A payment type associated with the retailer payment type. **deprecated**.
     *
     * @var string|null
     */
    public $payment_type_id;

    /**
     * A valid register ID.
     *
     * @var string|null
     */
    public $register_id;

    /**
     * A valid retailer payment type ID.
     *
     * @var string|null
     */
    public $retailer_payment_type_id;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $id;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $outlet_id;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $deleted_at;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $external_attributes;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $source_id;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $register_open_sequence_id;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $external_applications;
}
