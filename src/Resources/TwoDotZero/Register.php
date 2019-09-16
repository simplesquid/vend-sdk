<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Register
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Register extends DataTransferObject
{
    use CastsDates;

    /**
     * `0` for **Never**, `1` for **On Save/Layby/Account/Return**, `2` for **Always**.
     *
     * @var int|double|null
     */
    public $ask_for_note_on_save;

    /**
     * Ask for user on sale.
     *
     * @var bool|null
     */
    public $ask_for_user_on_sale;

    /**
     * Attributes. **undocumented**
     *
     * @var array|null
     */
    public $attributes;

    /**
     * Register ID.
     *
     * @var string|null
     */
    public $button_layout_id;

    /**
     * The ID of the payment type used for cash management transactions in this register. **internal**
     *
     * @var string|null
     */
    public $cash_managed_payment_type_id;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Indicates whether a receipt should be emailed after a sale.
     *
     * @var bool|null
     */
    public $email_receipt;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Invoice number prefix.
     *
     * @var string|null
     */
    public $invoice_prefix;

    /**
     * The numeric part of the last issued invoice.
     *
     * @var int|double|null
     */
    public $invoice_sequence;

    /**
     * Invoice number suffix.
     *
     * @var string|null
     */
    public $invoice_suffix;

    /**
     * Indicates if the Register is currently open.
     *
     * @var bool|null
     */
    public $is_open;

    /**
     * Is quick keys enabled. **undocumented**
     *
     * @var bool|null
     */
    public $is_quick_keys_enabled;

    /**
     * The Register name.
     *
     * @var string|null
     */
    public $name;

    /**
     * A valid ID of an Outlet that this register is associated with.
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * Print not on receipt.
     *
     * @var bool|null
     */
    public $print_note_on_receipt;

    /**
     * Indicates whether a receipt should be printed after a sale.
     *
     * @var bool|null
     */
    public $print_receipt;

    /**
     * Receipt template ID. **undocumented**
     *
     * @var string|null
     */
    public $receipt_template_id;

    /**
     * Date/time when the register was closed. Null if currently open.
     *
     * @var string|null
     */
    public $register_close_time;

    /**
     * The ID of the current register closure object. **internal**
     *
     * @var string|null
     */
    public $register_open_sequence_id;

    /**
     * Date/time when the register was open. Always in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $register_open_time;

    /**
     * Show discounts on receipts.
     *
     * @var bool|null
     */
    public $show_discounts_on_receipts;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

}
