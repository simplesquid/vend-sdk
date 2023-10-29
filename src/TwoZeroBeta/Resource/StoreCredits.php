<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\CreateStoreCreditTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCredits;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCreditsForCustomer;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCreditsForCustomers;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\StoreCreditReport;

class StoreCredits extends Resource
{
    public function listStoreCredits(
        ?int $pageSize,
        ?string $includes,
    ): Response {
        return $this->connector->send(new ListStoreCredits($pageSize, $includes));
    }

    public function listStoreCreditsForCustomer(
        string $customerId,
        ?string $includes,
    ): Response {
        return $this->connector->send(new ListStoreCreditsForCustomer($customerId, $includes));
    }

    public function listStoreCreditsForCustomers(): Response
    {
        return $this->connector->send(new ListStoreCreditsForCustomers());
    }

    public function createStoreCreditTransaction(
        string $customerId,
    ): Response {
        return $this->connector->send(new CreateStoreCreditTransaction($customerId));
    }

    public function storeCreditReport(): Response
    {
        return $this->connector->send(new StoreCreditReport());
    }
}
