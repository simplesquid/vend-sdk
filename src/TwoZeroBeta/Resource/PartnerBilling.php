<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\CreatePartnerSubscriptionToken;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\CreatePartnerSubscriptionTokenForUpdate;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\GetPartnerSubcriptionByToken;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\GetPartnerSubscription;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\ListPartnerSubscriptions;

class PartnerBilling extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createPartnerSubscriptionToken(
        array $payload,
    ): Response {
        return $this->connector->send(new CreatePartnerSubscriptionToken($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createPartnerSubscriptionTokenForUpdate(
        array $payload,
    ): Response {
        return $this->connector->send(new CreatePartnerSubscriptionTokenForUpdate($payload));
    }

    public function getPartnerSubcriptionByToken(
        string $partnerSubscriptionToken,
    ): Response {
        return $this->connector->send(new GetPartnerSubcriptionByToken($partnerSubscriptionToken));
    }

    public function getPartnerSubscription(
        string $partnerSubscriptionId,
    ): Response {
        return $this->connector->send(new GetPartnerSubscription($partnerSubscriptionId));
    }

    public function listPartnerSubscriptions(): Response
    {
        return $this->connector->send(new ListPartnerSubscriptions());
    }
}
