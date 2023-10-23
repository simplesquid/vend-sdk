<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Register Sale.
 */
class RegisterSale extends DataTransferObject
{
    /**
     * Xero invoice reference ID. Only editable for `ONACCOUNT` sales.
     *
     * @var string|null
     */
    public $accounts_transaction_id;

    /**
     * The date and time when the sale was created (on the server).
     *
     * @var string|null
     */
    public $created_at;

    /**
     * Customer object.
     * TODO: Change to Customer object.
     *
     * @var array|null
     */
    public $customer;

    /**
     * The ID of the customer associated with this sale.
     *
     * @var string|null
     */
    public $customer_id;

    /**
     * The name of the customer associated with the sale.
     *
     * @var string|null
     */
    public $customer_name;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The invoice number for the sale. If left null it will be populated by Vend with the next available invoice number.
     *
     * @var string|null
     */
    public $invoice_number;

    /**
     * Market ID **undocumented**.
     *
     * @var mixed|null
     */
    public $market_id;

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
     * The ID of another sale if this sale was created as a return.
     *
     * @var string|null
     */
    public $return_for;

    /**
     * The date of the sale. If not provided will be added as the time the sale reached the server.
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
     * **internal** One of `USER` and `SHOPIFY`.
     *
     * @var string|null
     */
    public $source;

    /**
     * The ID of the sale on the client side or another system where the sale was originally created.
     *
     * @var string|null
     */
    public $source_id;

    /**
     * Status of the sale. One of: `SAVED`, `CLOSED`, `ONACCOUNT`, `LAYBY`, `ONACCOUNT_CLOSED`, `LAYBY_CLOSED`, `VOIDED`.
     *
     * @var string|null
     */
    public $status;

    /**
     * Tax tax associated with the sale.
     *
     * @var string|null
     */
    public $tax_name;

    /**
     * Tax components for the sale.
     *
     * @var array|null
     */
    public $taxes;

    /**
     * Total cost of the sale.
     *
     * @var int|float|null
     */
    public $total_cost;

    /**
     * Total price of the sale.
     *
     * @var int|float|null
     */
    public $total_price;

    /**
     * Total tax of the sale.
     *
     * @var int|float|null
     */
    public $total_tax;

    /**
     * Register Sale Totals.
     * TODO: Change to Totals object.
     *
     * @var array|null
     */
    public $totals;

    /**
     * The date and time of the last update.
     *
     * @var string|null
     */
    public $updated_at;

    /**
     * The ID of the user (cashier) who created the sale.
     *
     * @var string|null
     */
    public $user_id;

    /**
     * The username of the user who created the sale.
     *
     * @var string|null
     */
    public $user_name;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $register_sale_attributes;
}
