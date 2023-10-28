<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\BulkStoreCreditList;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\CreateStoreCreditTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCredit;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCreditForCustomer;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\StoreCreditReport;

class StoreCredits extends Resource
{
    /**
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     * @param  string  $includes Include supplementary data. The only valid value for includes[] is 'customer'.
     */
    public function listStoreCredit(?int $pageSize, ?string $includes): Response
    {
        return $this->connector->send(new ListStoreCredit($pageSize, $includes));
    }

    /**
     * @param  string  $customerId Find by customer id.
     * @param  string  $includes Include supplementary data. The only valid value for includes[] is 'customer'.
     */
    public function listStoreCreditForCustomer(string $customerId, ?string $includes): Response
    {
        return $this->connector->send(new ListStoreCreditForCustomer($customerId, $includes));
    }

    public function bulkStoreCreditList(): Response
    {
        return $this->connector->send(new BulkStoreCreditList());
    }

    /**
     * @param  string  $customerId The customer id to apply the store transaction to.
     */
    public function createStoreCreditTransaction(string $customerId): Response
    {
        return $this->connector->send(new CreateStoreCreditTransaction($customerId));
    }

    public function storeCreditReport(): Response
    {
        return $this->connector->send(new StoreCreditReport());
    }
}
