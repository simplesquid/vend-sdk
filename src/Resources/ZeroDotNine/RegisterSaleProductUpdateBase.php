<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Register Sale Product Update Base
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class RegisterSaleProductUpdateBase extends DataTransferObject
{
    /**
     * Additional line item attributes.
     *
     * @var array|null
     */
    public $attributes;

    /**
     * Unit cost of the line item
     *
     * @var int|double|null
     */
    public $cost;

    /**
     * Discount value of the line item.
     *
     * @var int|null
     */
    public $discount;

    /**
     * Existing line item (register sale product) ID. If included in the POST request it will cause an update instead of a creating a new object.
     *
     * @var string|null
     */
    public $id;

    /**
     * The value of loyalty that will be incurred by the customer for this line item.
     *
     * @var int|double|null
     */
    public $loyalty_value;

    /**
     * Unit price of the line item.
     *
     * @var int|double
     */
    public $price;

    /**
     * Indicated whether the price was "fixed". If set to `"1"` it prevents recalculation of the total price based on the price from the database. One of `"0"` or `"1"`.
     *
     * @var int|null
     */
    public $price_set;

    /**
     * The ID of the product associated with this line item.
     *
     * @var string
     */
    public $product_id;

    /**
     * Quantity of products for the line item.
     *
     * @var int|double
     */
    public $quantity;

    /**
     * The ID of the register which was used to add this line item to the sale.
     *
     * @var string|null
     */
    public $register_id;

    /**
     * Order number of the line item.
     *
     * @var int|null
     */
    public $sequence;

    /**
     * If defined as `CONFIRMED` for pending sales, the line item will be added as **read-only**.
     *
     * @var string|null
     */
    public $status;

    /**
     * The unit tax value associated with this line item.
     *
     * @var int|double
     */
    public $tax;

    /**
     * The ID of the tax associated with this line item.
     *
     * @var string
     */
    public $tax_id;

}
