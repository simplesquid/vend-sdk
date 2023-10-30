<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Search\Search as SearchRequest;

class Search extends Resource
{
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
        return $this->connector->send(new SearchRequest($type, $orderDirection, $pageSize, $offset, $id, $id, $deleted,
            $status, $invoiceNumber, $customerId, $userId, $outletId, $dateFrom, $dateTo, $sku, $sku, $supplierId,
            $supplierId, $brandId, $brandId, $tagId, $tagId, $productTypeId, $productTypeId, $variantParentId,
            $variantParentId, $customerCode, $email, $firstName, $lastName, $companyName, $mobile, $phone));
    }
}
