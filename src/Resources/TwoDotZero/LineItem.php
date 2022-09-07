<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Line Item.
 */
class LineItem extends DataTransferObject
{
    /**
     * Unit cost for the line item.
     *
     * @var int|float|null
     */
    public $cost;

    /**
     * Total cost for the line item.
     *
     * @var int|float|null
     */
    public $cost_total;

    /**
     * Discount.
     *
     * @var int|float|null
     */
    public $discount;

    /**
     * Total discount for the line item.
     *
     * @var int|float|null
     */
    public $discount_total;

    /**
     * Gift card number **undocumented**.
     *
     * @var string|null
     */
    public $gift_card_number;

    /**
     * ID **undocumented**.
     *
     * @var string|null
     */
    public $id;

    /**
     * Indicates whether this line item is a return from another sale (referenced by `return_for` on the main sale object).
     *
     * @var bool|null
     */
    public $is_return;

    /**
     * The value that should be added to associated customer's loyalty balance.
     *
     * @var int|float|null
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
     * @var int|float|null
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
     * @var int|float|null
     */
    public $price_total;

    /**
     * Valid product ID.
     *
     * @var string|null
     */
    public $product_id;

    /**
     * Promotions **undocumented**.
     *
     * @var array|null
     */
    public $promotions;

    /**
     * Quantity of product units included in the sale.
     *
     * @var int|float|null
     */
    public $quantity;

    /**
     * Order of the line item in the sale.
     *
     * @var int|float|null
     */
    public $sequence;

    /**
     * Line item status.
     *
     * @var string|null
     */
    public $status;

    /**
     * Unit tax for the line item. **deprecated**.
     *
     * @var int|float|null
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
     * @var int|float|null
     */
    public $tax_total;

    /**
     * Total cost **undocumented**.
     *
     * @var int|float|null
     */
    public $total_cost;

    /**
     * Total discount **undocumented**.
     *
     * @var int|float|null
     */
    public $total_discount;

    /**
     * Total loyalty value **undocumented**.
     *
     * @var int|float|null
     */
    public $total_loyalty_value;

    /**
     * Total price **undocumented**.
     *
     * @var int|float|null
     */
    public $total_price;

    /**
     * Total tax **undocumented**.
     *
     * @var int|float|null
     */
    public $total_tax;

    /**
     * Unit cost **undocumented**.
     *
     * @var int|float|null
     */
    public $unit_cost;

    /**
     * Unit discount **undocumented**.
     *
     * @var int|float|null
     */
    public $unit_discount;

    /**
     * Unit loyalty value **undocumented**.
     *
     * @var int|float|null
     */
    public $unit_loyalty_value;

    /**
     * Unit price **undocumented**.
     *
     * @var int|float|null
     */
    public $unit_price;

    /**
     * Unit tax **undocumented**.
     *
     * @var int|float|null
     */
    public $unit_tax;
    
    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $user_id;
    
    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $salesperson_id;
}
