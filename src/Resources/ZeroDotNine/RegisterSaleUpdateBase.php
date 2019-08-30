<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Register Sale Update Base
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class RegisterSaleUpdateBase extends DataTransferObject
{
    /**
     * Xero invoice reference ID. Only editable for `ONACCOUNT` sales.
     *
     * @var string|null
     */
    public $accounts_transaction_id;

    /**
     * The ID of the customer associated with this sale.
     *
     * @var string|null
     */
    public $customer_id;

    /**
     * The invoice number for the sale. If left null it will be populated by Vend with the next available invoice number.
     *
     * @var string|null
     */
    public $invoice_number;

    /**
     * A note on the sale entered by the cashier.
     *
     * @var string|null
     */
    public $note;

    /**
     * The ID of the register where the sale was created.
     *
     * @var string|null
     */
    public $register_id;

    /**
     * Payments.
     *
     * @var array|null
     */
    public $register_sale_payments;

    /**
     * Line items.
     *
     * @var array|null
     */
    public $register_sale_products;

    /**
     * The date of the sale in RFC3339 format. If not provided will be added as the time the sale reached the server.
     *
     * @var string|null
     */
    public $sale_date;

    /**
     * Short, unique code to be printed on the receipt for loyalty tracking purposes.
     *
     * @var string|null
     */
    public $short_code;

    /**
     * The ID of the sale on the client side or another system where the sale was originally created.
     *
     * @var string|null
     */
    public $source_id;

    /**
     * Status of the sale. One of: `SAVED`, `CLOSED`, `ONACCOUNT`, `LAYBY`, `ONACCOUNT_CLOSED`, `LAYBY_CLOSED`, `VOIDED`.
     *
     * @var string
     */
    public $status;

    /**
     * The ID of the user (cashier) who created the sale.
     *
     * @var string
     */
    public $user_id;

}
