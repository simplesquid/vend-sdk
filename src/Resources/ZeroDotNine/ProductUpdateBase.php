<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Product Update Base.
 */
class ProductUpdateBase extends DataTransferObject
{
    /**
     * Code used to associate sales of the product with a specific account. Value will be returned as `account_code_sales`.
     *
     * @var string|null
     */
    public $account_code;

    /**
     * Code used to associate purchase (cost) of the product with a specific account.
     *
     * @var string|null
     */
    public $account_code_purchase;

    /**
     * Indicates whether the product is currently active.
     **NOTE:** Currently has to be submitted as __"0"__ or __"1"__. Will be returned as __boolean__ value of `true` or `false`.
     *
     * @var string|null
     */
    public $active;

    /**
     * The name of the brand associated with the product.
     *
     * @var string|null
     */
    public $brand_name;

    /**
     * A number describing the position of a variant in the UI.
     *
     * @var int|null
     */
    public $button_order;

    /**
     * The description of the product. May include HTML.
     *
     * @var string|null
     */
    public $description;

    /**
     * The handle of the product. Creating a new product with a handle identical to one of an existing product will cause creating a variant.
     *
     * @var string
     */
    public $handle;

    /**
     * Existing product ID. If included in the POST request it will cause an update instead of a creating a new object.
     *
     * @var string|null
     */
    public $id;

    /**
     * A list of inventory records associated with the product.
     *
     * @var array|null
     */
    public $inventory;

    /**
     * The name of the product. Should be posted without any variant related suffixes.
     *
     * @var string
     */
    public $name;

    /**
     * Retail price for the product. Tax inclusive or exclusive depending on the store settings.
     *
     * @var int|float
     */
    public $retail_price;

    /**
     * The SKU of the product. Should be unique for new products.
     *
     * @var string
     */
    public $sku;

    /**
     * The ID that can be used to reference a product in another system.
     *
     * @var string|null
     */
    public $source_id;

    /**
     * Reference ID to an external object. Value will be returned as `variant_source_id`.
     *
     * @var string|null
     */
    public $source_variant_id;

    /**
     * The code of the supplier for the product.
     *
     * @var string|null
     */
    public $supplier_code;

    /**
     * Product supplier's name.
     *
     * @var string|null
     */
    public $supplier_name;

    /**
     * The default cost of supply for the product.
     *
     * @var string|null
     */
    public $supply_price;

    /**
     * A comma separated list of tags associated with the product.
     *
     * @var string|null
     */
    public $tags;

    /**
     * ID of the tax to be used as the default for this product (for inclusive stores).
     *
     * @var string|null
     */
    public $tax_id;

    /**
     * Indicated whether the system should track inventory count for this product.
     *
     * @var bool|null
     */
    public $track_inventory;

    /**
     * The name of the product type associated with the product.
     *
     * @var string|null
     */
    public $type;

    /**
     * The name of the variant option 1.
     *
     * @var string|null
     */
    public $variant_option_one_name;

    /**
     * The value of the variant option 1.
     *
     * @var string|null
     */
    public $variant_option_one_value;

    /**
     * The name of the variant option 3.
     *
     * @var string|null
     */
    public $variant_option_three_name;

    /**
     * The value of the variant option 3.
     *
     * @var string|null
     */
    public $variant_option_three_value;

    /**
     * The name of the variant option 2.
     *
     * @var string|null
     */
    public $variant_option_two_name;

    /**
     * The value of the variant option 2.
     *
     * @var string|null
     */
    public $variant_option_two_value;
}
