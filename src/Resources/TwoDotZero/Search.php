<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Search
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Search extends DataTransferObject
{
    /**
     * The `id` of the object to be included in the response.
     *
     * @var string|null
     */
    public $_id;

    /**
     * **PRODUCTS** The ID of the brand associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $brand_id;

    /**
     * **CUSTOMERS** The `company_name` for the customers to find.
     *
     * @var string|null
     */
    public $company_name;

    /**
     * **CUSTOMERS** The `customer_code` associated with the customer to find.
     *
     * @var string|null
     */
    public $customer_code;

    /**
     * **SALES** The `ID` of the customer associated with the sales.
     *
     * @var string|null
     */
    public $customer_id;

    /**
     * **SALES** Lower limit for the sale date as UTC timestamp. Format: `2016-08-08T12:00:00Z`.
     *
     * @var string|null
     */
    public $date_from;

    /**
     * **SALES** Upper limit for the sale date as UTC timestamp. Format: `2016-08-08T12:00:00Z`.
     *
     * @var string|null
     */
    public $date_to;

    /**
     * Indicated whether deleted objects should be included in the response.
     *
     * @var bool|null
     */
    public $deleted;

    /**
     * **CUSTOMERS** The `first_name` for the customers to find.
     *
     * @var string|null
     */
    public $first_name;

    /**
     * **SALES** Invoice number of the sale.
     *
     * @var string|null
     */
    public $invoice_number;

    /**
     * **CUSTOMERS** The `last_name` for the customers to find.
     *
     * @var string|null
     */
    public $last_name;

    /**
     * **PRODUCTS** The ID of the brand associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $not_brand_id;

    /**
     * The `id` of the object to be excluded from the response.
     *
     * @var string|null
     */
    public $not_id;

    /**
     * **PRODUCTS** The ID of the product type associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $not_product_type_id;

    /**
     * **PRODUCTS** The SKU of products to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $not_sku;

    /**
     * **PRODUCTS** The ID of the supplier associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $not_supplier_id;

    /**
     * **PRODUCTS** The ID of the brand associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $not_tag_id;

    /**
     * **PRODUCTS** The ID of the variant parent product associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $not_variant_parent_id;

    /**
     * **SALES** The `ID` of the outlet associated with the sales.
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * **PRODUCTS** The ID of the product type associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $product_type_id;

    /**
     * **PRODUCTS** The SKU of products to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $sku;

    /**
     * **SALES** Status of the sale to find.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $status;

    /**
     * **PRODUCTS** The ID of the supplier associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $supplier_id;

    /**
     * **PRODUCTS** The ID of the tag associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $tag_id;

    /**
     * **SALES** The `ID` of the user associated with the sales.
     *
     * @var string|null
     */
    public $user_id;

    /**
     * **PRODUCTS** The ID of the variant parent product associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     *
     * @var string|null
     */
    public $variant_parent_id;

    public function toArray(): array
    {
        $array = parent::toArray();

        foreach ($array as $key => $value) {
            $newKey = str_replace('not_', '-', $key);

            if ($newKey !== $key) {
                $array[$newKey] = $array[$key];
                unset($array[$key]);
            }
        }

        return $array;
    }
}
