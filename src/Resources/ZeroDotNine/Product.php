<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Product
 *
 * @package SimpleSquid\Vend\Resources\ZeroDotNine
 */
class Product extends DataTransferObject
{
    /**
     * Code used to associate purchase (cost) of the product with a specific account.
     *
     * @var string|null
     */
    public $account_code_purchase;

    /**
     * Code used to associate sales of the product with a specific account. When POSTing it should be delivered as `account_code`.
     *
     * @var string|null
     */
    public $account_code_sales;

    /**
     * Indicates whether the product is currently active.
     *
     * @var bool|null
     */
    public $active;

    /**
     * The root of the product's name as defined by the user in the UI. Doesn't include any variant related suffixes.
     *
     * @var string|null
     */
    public $base_name;

    /**
     * The ID of the brand associated with the product.
     *
     * @var string|null
     */
    public $brand_id;

    /**
     * A number describing the position of a variant in the UI.
     *
     * @var int|null
     */
    public $button_order;

    /**
     * The time of the product deletion.
     *
     * @var string|null
     */
    public $deleted_at;

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
     * Indicated whether the product has variants.
     *
     * @var bool|null
     */
    public $has_variants;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * **DEPRECATED** URL of the product image.
     *
     * @var string|null
     */
    public $image;

    /**
     * **DEPRECATED** URL of the large product image.
     *
     * @var string|null
     */
    public $image_large;

    /**
     * An array of product images.
     *
     * @var array|null
     */
    public $images;

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
     * Tax exclusive default price of the product.
     *
     * @var int|double|null
     */
    public $price;

    /**
     * An array of price book entries associated with the product.
     *
     * @var array|null
     */
    public $price_book_entries;

    /**
     * Retail price for the product. Tax inclusive or exclusive depending on the store settings.
     *
     * @var int|double
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
     * The name of the default tax for the product.
     *
     * @var int|double|null
     */
    public $tax;

    /**
     * ID of the tax to be used as the default for this product (for inclusive stores).
     *
     * @var string|null
     */
    public $tax_id;

    /**
     * The name of the default tax for the product.
     *
     * @var string|null
     */
    public $tax_name;

    /**
     * The default tax rate for the product.
     *
     * @var int|double|null
     */
    public $tax_rate;

    /**
     * An array of product tax objects.
     *
     * @var array|null
     */
    public $taxes;

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
     * The time of the last update for the product.
     *
     * @var string|null
     */
    public $updated_at;

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

    /**
     * The ID of the parent product. Only available of variant children.
     *
     * @var string|null
     */
    public $variant_parent_id;

    /**
     * Reference ID to an external object. Should be POSTed as `source_variant_id`.
     *
     * @var string|null
     */
    public $variant_source_id;

}
