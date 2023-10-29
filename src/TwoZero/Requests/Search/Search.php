<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Search;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class Search extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/search';
    }

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
