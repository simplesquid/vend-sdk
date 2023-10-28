<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Search\Search as SearchRequest;

class Search extends Resource
{
    /**
     * @param  string  $type The entity type to search for.
     * @param  string  $orderDirection Sorting direction.
     * @param  int  $pageSize The maximum number of objects to be included in the response, currently limited to 1000. Specifying more than 1000 will result in 1000 objects being returned.
     * @param  int  $offset The number of objects to be "skipped" for the response. Used for pagination.
     * @param  string  $id The `id` of the object to be included in the response.
     * @param  string  $id The `id` of the object to be excluded from the response.
     * @param  bool  $deleted Indicated whether deleted objects should be included in the response.
     * @param  string  $status **SALES** Status of the sale to find.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $invoiceNumber **SALES** Invoice number of the sale.
     * @param  string  $customerId **SALES** The `ID` of the customer associated with the sales.
     * @param  string  $userId **SALES** The `ID` of the user associated with the sales.
     * @param  string  $outletId **SALES** The `ID` of the outlet associated with the sales.
     * @param  string  $dateFrom **SALES** Lower limit for the sale date as UTC timestamp. Format: `2016-08-08T12:00:00Z`.
     * @param  string  $dateTo **SALES** Upper limit for the sale date as UTC timestamp. Format: `2016-08-08T12:00:00Z`.
     * @param  string  $sku **PRODUCTS** The SKU of products to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $sku **PRODUCTS** The SKU of products to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $supplierId **PRODUCTS** The ID of the supplier associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $supplierId **PRODUCTS** The ID of the supplier associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $brandId **PRODUCTS** The ID of the brand associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $brandId **PRODUCTS** The ID of the brand associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $tagId **PRODUCTS** The ID of the tag associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $tagId **PRODUCTS** The ID of the brand associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $productTypeId **PRODUCTS** The ID of the product type associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $productTypeId **PRODUCTS** The ID of the product type associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $variantParentId **PRODUCTS** The ID of the variant parent product associated with the product to include in the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $variantParentId **PRODUCTS** The ID of the variant parent product associated with the product to exclude from the search.
     * Can be used multiple times to search for objects with different values of this parameter.
     * @param  string  $customerCode **CUSTOMERS** The `customer_code` associated with the customer to find.
     * @param  string  $email **CUSTOMERS** The `email` address associated with the customer to find.
     * @param  string  $firstName **CUSTOMERS** The `first_name` for the customers to find.
     * @param  string  $lastName **CUSTOMERS** The `last_name` for the customers to find.
     * @param  string  $companyName **CUSTOMERS** The `company_name` for the customers to find.
     * @param  string  $mobile **CUSTOMERS** The `mobile number` for the customers to find.
     * @param  string  $phone **CUSTOMERS** The `phone number` for the customers to find.
     */
    public function search(
        string $type,
        ?string $orderDirection,
        ?int $pageSize,
        ?int $offset,
        ?string $id,
        ?bool $deleted,
        ?string $status,
        ?string $invoiceNumber,
        ?string $customerId,
        ?string $userId,
        ?string $outletId,
        ?string $dateFrom,
        ?string $dateTo,
        ?string $sku,
        ?string $supplierId,
        ?string $brandId,
        ?string $tagId,
        ?string $productTypeId,
        ?string $variantParentId,
        ?string $customerCode,
        ?string $email,
        ?string $firstName,
        ?string $lastName,
        ?string $companyName,
        ?string $mobile,
        ?string $phone,
    ): Response {
        return $this->connector->send(new SearchRequest($type, $orderDirection, $pageSize, $offset, $id, $id, $deleted, $status, $invoiceNumber, $customerId, $userId, $outletId, $dateFrom, $dateTo, $sku, $sku, $supplierId, $supplierId, $brandId, $brandId, $tagId, $tagId, $productTypeId, $productTypeId, $variantParentId, $variantParentId, $customerCode, $email, $firstName, $lastName, $companyName, $mobile, $phone));
    }
}
