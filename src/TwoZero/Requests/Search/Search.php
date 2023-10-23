<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Search;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search
 *
 * This endpoint allows integrators to search all of the most commonly used resources, **sales**,
 * **products** and **customers**. Each type allowing search by a number of different parameters.
 * ###
 * Supported resource types and attributes
 * - **Sales**
 *   - date_from
 *   - date_to
 *   - status
 *   -
 * invoice_number
 *   - customer_id
 *   - user_id
 *   - outlet_id
 * - **Products**
 *   - sku **_(values must be
 * lowercased)_**
 *   - supplier_id
 *   - brand_id
 *   - tag_id
 *   - product_type_id
 *   - variant_parent_id
 * -
 * **Customers**
 *   - customer_code
 *   - first_name
 *   - last_name
 *   - company_name
 *   - mobile
 *   - phone
 *
 * - email
 * ### Sorting and pagination
 * Unlike other endpoints in the API 2.0, search results from this
 * endpoint can be sorted by any of the attributes above. Because of that, the default
 * [pagination](https://docs.vendhq.com/docs/pagination#api-20) mechanism is not appropriate for this
 * endpoint. Instead, this endpoint uses `offset` and `page_size` attributes to handle search results
 * spanning multiple pages.
 */
class Search extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/search";
	}


	/**
	 * @param string $type The entity type to search for.
	 * @param null|string $orderDirection Sorting direction.
	 * @param null|int $pageSize The maximum number of objects to be included in the response, currently limited to 1000. Specifying more than 1000 will result in 1000 objects being returned.
	 * @param null|int $offset The number of objects to be "skipped" for the response. Used for pagination.
	 * @param null|string $id The `id` of the object to be included in the response.
	 * @param null|string $id The `id` of the object to be excluded from the response.
	 * @param null|bool $deleted Indicated whether deleted objects should be included in the response.
	 * @param null|string $status **SALES** Status of the sale to find.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $invoiceNumber **SALES** Invoice number of the sale.
	 * @param null|string $customerId **SALES** The `ID` of the customer associated with the sales.
	 * @param null|string $userId **SALES** The `ID` of the user associated with the sales.
	 * @param null|string $outletId **SALES** The `ID` of the outlet associated with the sales.
	 * @param null|string $dateFrom **SALES** Lower limit for the sale date as UTC timestamp. Format: `2016-08-08T12:00:00Z`.
	 * @param null|string $dateTo **SALES** Upper limit for the sale date as UTC timestamp. Format: `2016-08-08T12:00:00Z`.
	 * @param null|string $sku **PRODUCTS** The SKU of products to include in the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $sku **PRODUCTS** The SKU of products to exclude from the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $supplierId **PRODUCTS** The ID of the supplier associated with the product to include in the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $supplierId **PRODUCTS** The ID of the supplier associated with the product to exclude from the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $brandId **PRODUCTS** The ID of the brand associated with the product to include in the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $brandId **PRODUCTS** The ID of the brand associated with the product to exclude from the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $tagId **PRODUCTS** The ID of the tag associated with the product to include in the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $tagId **PRODUCTS** The ID of the brand associated with the product to exclude from the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $productTypeId **PRODUCTS** The ID of the product type associated with the product to include in the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $productTypeId **PRODUCTS** The ID of the product type associated with the product to exclude from the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $variantParentId **PRODUCTS** The ID of the variant parent product associated with the product to include in the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $variantParentId **PRODUCTS** The ID of the variant parent product associated with the product to exclude from the search.
	 * Can be used multiple times to search for objects with different values of this parameter.
	 * @param null|string $customerCode **CUSTOMERS** The `customer_code` associated with the customer to find.
	 * @param null|string $email **CUSTOMERS** The `email` address associated with the customer to find.
	 * @param null|string $firstName **CUSTOMERS** The `first_name` for the customers to find.
	 * @param null|string $lastName **CUSTOMERS** The `last_name` for the customers to find.
	 * @param null|string $companyName **CUSTOMERS** The `company_name` for the customers to find.
	 * @param null|string $mobile **CUSTOMERS** The `mobile number` for the customers to find.
	 * @param null|string $phone **CUSTOMERS** The `phone number` for the customers to find.
	 */
	public function __construct(
		protected string $type,
		protected ?string $orderDirection = null,
		protected ?int $pageSize = null,
		protected ?int $offset = null,
		protected ?string $id = null,
		protected ?bool $deleted = null,
		protected ?string $status = null,
		protected ?string $invoiceNumber = null,
		protected ?string $customerId = null,
		protected ?string $userId = null,
		protected ?string $outletId = null,
		protected ?string $dateFrom = null,
		protected ?string $dateTo = null,
		protected ?string $sku = null,
		protected ?string $supplierId = null,
		protected ?string $brandId = null,
		protected ?string $tagId = null,
		protected ?string $productTypeId = null,
		protected ?string $variantParentId = null,
		protected ?string $customerCode = null,
		protected ?string $email = null,
		protected ?string $firstName = null,
		protected ?string $lastName = null,
		protected ?string $companyName = null,
		protected ?string $mobile = null,
		protected ?string $phone = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'type' => $this->type,
			'order_direction' => $this->orderDirection,
			'page_size' => $this->pageSize,
			'offset' => $this->offset,
			'_id' => $this->id,
			'-_id' => $this->id,
			'deleted' => $this->deleted,
			'status' => $this->status,
			'invoice_number' => $this->invoiceNumber,
			'customer_id' => $this->customerId,
			'user_id' => $this->userId,
			'outlet_id' => $this->outletId,
			'date_from' => $this->dateFrom,
			'date_to' => $this->dateTo,
			'sku' => $this->sku,
			'-sku' => $this->sku,
			'supplier_id' => $this->supplierId,
			'-supplier_id' => $this->supplierId,
			'brand_id' => $this->brandId,
			'-brand_id' => $this->brandId,
			'tag_id' => $this->tagId,
			'-tag_id' => $this->tagId,
			'product_type_id' => $this->productTypeId,
			'-product_type_id' => $this->productTypeId,
			'variant_parent_id' => $this->variantParentId,
			'-variant_parent_id' => $this->variantParentId,
			'customer_code' => $this->customerCode,
			'email' => $this->email,
			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'company_name' => $this->companyName,
			'mobile' => $this->mobile,
			'phone' => $this->phone,
		]);
	}
}
