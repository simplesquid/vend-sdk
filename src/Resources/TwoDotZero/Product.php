<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Product.
 */
class Product extends DataTransferObject
{
    use CastsDates;

    /**
     * Account code. **undocumented**.
     *
     * @var string|null
     */
    public $account_code;

    /**
     * Account code purchase. **undocumented**.
     *
     * @var string|null
     */
    public $account_code_purchase;

    /**
     * Indicated whether the Product is active.
     *
     * @var bool|null
     */
    public $active;

    /**
     * Attributes. **undocumented**.
     *
     * @var array|null
     */
    public $attributes;

    /**
     * Brand Sample.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\Brand|null
     */
    public $brand;

    /**
     * Brand ID. **undocumented**.
     *
     * @var string|null
     */
    public $brand_id;

    /**
     * Button order. **undocumented**.
     *
     * @var int|null
     */
    public $button_order;

    /**
     * A list of tag objects.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\Tag[]|null
     */
    public $categories;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * A detailed description of the Product. **Note** Can contain HTML.
     *
     * @var string|null
     */
    public $description;

    /**
     * Product handle. **Note:** Variants share the same handle.
     *
     * @var string
     */
    public $handle;

    /**
     * Indicates whether inventory is being tracked for the Product.
     *
     * @var bool|null
     */
    public $has_inventory;

    /**
     * Indicated whether product has variants.
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
     * Image thumbnail URL.
     *
     * @var string|null
     */
    public $image_thumbnail_url;

    /**
     * Image URL.
     *
     * @var string|null
     */
    public $image_url;

    /**
     * A list of image objects.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\ImageSample[]|null
     */
    public $images;

    /**
     * Is active. **undocumented**.
     *
     * @var bool|null
     */
    public $is_active;

    /**
     * Indicates whether the Product is a composite one.
     *
     * @var bool|null
     */
    public $is_composite;

    /**
     * Loyalty amount. **undocumented**.
     *
     * @var int|float|null
     */
    public $loyalty_amount;

    /**
     * Product name.
     *
     * @var string
     */
    public $name;

    /**
     * Price excluding tax. **undocumented**.
     *
     * @var int|float|null
     */
    public $price_excluding_tax;

    /**
     * Price including tax. **undocumented**.
     *
     * @var int|float|null
     */
    public $price_including_tax;

    /**
     * Product type ID. **undocumented**.
     *
     * @var string|null
     */
    public $product_type_id;

    /**
     * Product sku. **Note:** Should be unique, but it's not verified while posting.
     *
     * @var string
     */
    public $sku;

    /**
     * Indicates the origin of the product.
     * Can be USER, SYSTEM, SHOPIFY.
     *
     * @var string|null
     */
    public $source;

    /**
     * External reference ID.
     *
     * @var string|null
     */
    public $source_id;

    /**
     * Secondary external reference ID.
     *
     * @var string|null
     */
    public $source_variant_id;

    /**
     * Supplier Sample.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\Supplier|null
     */
    public $supplier;

    /**
     * Supplier code.
     *
     * @var string|null
     */
    public $supplier_code;

    /**
     * Supplier ID. **undocumented**.
     *
     * @var string|null
     */
    public $supplier_id;

    /**
     * Default supply price,.
     *
     * @var int|float|null
     */
    public $supply_price;

    /**
     * Tag IDs. **undocumented**.
     *
     * @var array|null
     */
    public $tag_ids;

    /**
     * Product Type Sample.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\ProductType|null
     */
    public $type;

    /**
     * Last update timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $updated_at;

    /**
     * Variant count. **undocumented**.
     *
     * @var int|null
     */
    public $variant_count;

    /**
     * Variant name. **undocumented**.
     *
     * @var string|null
     */
    public $variant_name;

    /**
     * A list of variant option objects.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\VariantOption[]|null
     */
    public $variant_options;

    /**
     * This value is set if a Product is a variant of another Product.
     *
     * @var string|null
     */
    public $variant_parent_id;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $product_codes;
    
    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $packaging;
    
    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $skuImages;
    
    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $ecwid_enabled_webstore;
    
    
    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $product_suppliers;
}
