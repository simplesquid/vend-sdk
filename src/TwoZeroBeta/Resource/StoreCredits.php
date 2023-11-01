<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\CreateStoreCreditTransaction;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCredits;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCreditsForCustomer;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\ListStoreCreditsForCustomers;
use SimpleSquid\Vend\TwoZeroBeta\Requests\StoreCredits\StoreCreditReport;

class StoreCredits extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createStoreCreditTransaction(
        string $customerId,
        array $payload,
    ): Response {
        return $this->connector->send(new CreateStoreCreditTransaction($customerId, $payload));
    }

    /**
     * @param  null|string[]  $includes
     */
    public function listStoreCredits(
        ?int $pageSize = null,
        ?array $includes = null,
    ): Response {
        return $this->connector->send(new ListStoreCredits($pageSize, $includes));
    }

    /**
     * @param  null|string[]  $includes
     */
    public function listStoreCreditsForCustomer(
        string $customerId,
        ?array $includes = null,
    ): Response {
        return $this->connector->send(new ListStoreCreditsForCustomer($customerId, $includes));
    }

    /**
     * @param  string[]  $customerIds
     */
    public function listStoreCreditsForCustomers(
        array $customerIds,
    ): Response {
        return $this->connector->send(new ListStoreCreditsForCustomers($customerIds));
    }

    public function storeCreditReport(): Response
    {
        return $this->connector->send(new StoreCreditReport());
    }
}
