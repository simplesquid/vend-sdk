<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Line Item
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class LineItem extends DataTransferObject
{
    /**
     * Unit cost for the line item.
     *
     * @var int|double|null
     */
    public $cost;

    /**
     * Total cost for the line item.
     *
     * @var int|double|null
     */
    public $cost_total;

    /**
     * Discount.
     *
     * @var int|double|null
     */
    public $discount;

    /**
     * Total discount for the line item.
     *
     * @var int|double|null
     */
    public $discount_total;

    /**
     * Indicates whether this line item is a return from another sale (referenced by `return_for` on the main sale object).
     *
     * @var bool|null
     */
    public $is_return;

    /**
     * The value that should be added to associated customer's loyalty balance.
     *
     * @var int|double|null
     */
    public $loyalty_value;

    /**
     * Line item note.
     *
     * @var string|null
     */
    public $note;

    /**
     * Unit price for the product.
     *
     * @var int|double|null
     */
    public $price;

    /**
     * Indicates whether the price was set manually. Using `true` means that the value will never be refreshed from the price book when reloaded (sale retrieved from parked sales).
     *
     * @var bool|null
     */
    public $price_set;

    /**
     * Total price for the line item.
     *
     * @var int|double|null
     */
    public $price_total;

    /**
     * Valid product ID.
     *
     * @var string|null
     */
    public $product_id;

    /**
     * Quantity of product units included in the sale.
     *
     * @var int|double|null
     */
    public $quantity;

    /**
     * Order of the line item in the sale.
     *
     * @var int|double|null
     */
    public $sequence;

    /**
     * Line item status.
     *
     * @var string|null
     */
    public $status;

    /**
     * Unit tax for the line item. **deprecated**
     *
     * @var int|double|null
     */
    public $tax;

    /**
     * Collection of tax components associated with the line item.
     *
     * @var array|null
     */
    public $tax_components;

    /**
     * Tax ID.
     *
     * @var string|null
     */
    public $tax_id;

    /**
     * Total tax value.
     *
     * @var int|double|null
     */
    public $tax_total;

    /**
     * ID **undocumented**
     *
     * @var string|null
     */
    public $id;

    /**
     * Gift card number **undocumented**
     *
     * @var string|null
     */
    public $gift_card_number;

    /**
     * Promotions **undocumented**
     *
     * @var array|null
     */
    public $promotions;

    /**
     * Unit cost **undocumented**
     *
     * @var int|double|null
     */
    public $unit_cost;

    /**
     * Unit discount **undocumented**
     *
     * @var int|double|null
     */
    public $unit_discount;

    /**
     * Unit loyalty value **undocumented**
     *
     * @var int|double|null
     */
    public $unit_loyalty_value;

    /**
     * Unit price **undocumented**
     *
     * @var int|double|null
     */
    public $unit_price;

    /**
     * Unit tax **undocumented**
     *
     * @var int|double|null
     */
    public $unit_tax;

    /**
     * Total tax **undocumented**
     *
     * @var int|double|null
     */
    public $total_tax;

    /**
     * Total cost **undocumented**
     *
     * @var int|double|null
     */
    public $total_cost;

    /**
     * Total discount **undocumented**
     *
     * @var int|double|null
     */
    public $total_discount;

    /**
     * Total loyalty value **undocumented**
     *
     * @var int|double|null
     */
    public $total_loyalty_value;

    /**
     * Total price **undocumented**
     *
     * @var int|double|null
     */
    public $total_price;

}
