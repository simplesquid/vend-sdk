<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Sale.
 */
class Sale extends DataTransferObject
{
    use CastsDates;

    /**
     * Collection of adjustments.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\Adjustment[]|null
     */
    public $adjustments;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * Valid customer ID for the retailer.
     *
     * @var string|null
     */
    public $customer_id;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Invoice number which if provided, should use the prefix and suffix defined for the register.
     *
     * @var string|null
     */
    public $invoice_number;

    /**
     * Optionally provided value.
     *
     * @var int|float|null
     */
    public $invoice_sequence;

    /**
     * Collection of line items.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\LineItem[]|null
     */
    public $line_items;

    /**
     * Sale Note.
     *
     * @var string|null
     */
    public $note;

    /**
     * Valid outlet ID for the retailer.
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * Collection of payments.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\Payment[]|null
     */
    public $payments;

    /**
     * Valid register ID for the retailer.
     *
     * @var string|null
     */
    public $register_id;

    /**
     * Reference ID to a different sale if this sale was created as a return.
     *
     * @var string|null
     */
    public $return_for;

    /**
     * Sale timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $sale_date;

    /**
     * 6 character code used in the loyalty system.
     *
     * @var string|null
     */
    public $short_code;

    /**
     * Origin of the sale.
     * USER for sales created in Vend client apps, SHOPIFY for sale synced from Shopify by the integration, ECOMMERCE for sales coming from Vend Ecommerce.
     *
     * @var string|null
     */
    public $source;

    /**
     * External ID for sales coming from other systems.
     *
     * @var string|null
     */
    public $source_id;

    /**
     * Sale status.
     * One of: CLOSED, SAVED, ONACCOUNT, ONACCOUNT_CLOSED, LAYBY, LAYBY_CLOSED. VOIDED ???
     *
     * @var string|null
     */
    public $status;

    /**
     * Collection of taxes.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\SaleTax[]|null
     */
    public $taxes;

    /**
     * Total incurred loyalty.
     *
     * @var int|float|null
     */
    public $total_loyalty;

    /**
     * Total (tax exclusive) price of the sale.
     *
     * @var int|float|null
     */
    public $total_price;

    /**
     * Total tax.
     *
     * @var int|float|null
     */
    public $total_tax;

    /**
     * Last update timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $updated_at;

    /**
     * Valid user ID for the retailer.
     *
     * @var string|null
     */
    public $user_id;

    /**
     * Receipt number. **undocumented**.
     *
     * @var string|null
     */
    public $receipt_number;

    /**
     * Total price inclusive. **undocumented**.
     *
     * @var int|float|null
     */
    public $total_price_incl;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

    /**
     * **undocumented**
     *
     * @var mixed|null
     */
    public $accounts_transaction_id;
}
