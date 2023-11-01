<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Search\Search as SearchRequest;

class Search extends Resource
{
    public function search(
        string $type,
        ?string $orderDirection = null,
        ?int $pageSize = null,
        ?int $offset = null,
        ?string $id = null,
        ?bool $deleted = null,
        ?string $status = null,
        ?string $invoiceNumber = null,
        ?string $customerId = null,
        ?string $userId = null,
        ?string $outletId = null,
        ?string $dateFrom = null,
        ?string $dateTo = null,
        ?string $sku = null,
        ?string $supplierId = null,
        ?string $brandId = null,
        ?string $tagId = null,
        ?string $productTypeId = null,
        ?string $variantParentId = null,
        ?string $customerCode = null,
        ?string $email = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $companyName = null,
        ?string $mobile = null,
        ?string $phone = null,
    ): Response {
        return $this->connector->send(new SearchRequest(
            $type,
            $orderDirection,
            $pageSize,
            $offset,
            $id,
            $id,
            $deleted,
            $status,
            $invoiceNumber,
            $customerId,
            $userId,
            $outletId,
            $dateFrom,
            $dateTo,
            $sku,
            $sku,
            $supplierId,
            $supplierId,
            $brandId,
            $brandId,
            $tagId,
            $tagId,
            $productTypeId,
            $productTypeId,
            $variantParentId,
            $variantParentId,
            $customerCode,
            $email,
            $firstName,
            $lastName,
            $companyName,
            $mobile,
            $phone,
        ));
    }
}
