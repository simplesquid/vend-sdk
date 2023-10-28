<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\RegisterSales\CreateUpdateRegisterSale;

class RegisterSales extends Resource
{
    public function createUpdateRegisterSale(
        string $userId,
        string $status,
        string $id = null,
        string $source = null,
        string $sourceId = null,
        string $registerId = null,
        string $customerId = null,
        string $saleDate = null,
        string $note = null,
        string $shortCode = null,
        string $invoiceNumber = null,
        string $accountsTransactionId = null,
        array $registerSaleProducts = null,
        array $registerSalePayments = null,
        array $serviceFields = null,
    ): Response {
        return $this->connector->send(new CreateUpdateRegisterSale($userId, $status, $id, $source, $sourceId, $registerId, $customerId, $saleDate, $note, $shortCode, $invoiceNumber, $accountsTransactionId, $registerSaleProducts, $registerSalePayments, $serviceFields));
    }
}
