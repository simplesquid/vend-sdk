<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\CreatePartnerSubscriptionToken;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\CreatePartnerSubscriptionTokenForUpdate;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\GetPartnerSubcriptionByToken;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\GetPartnerSubscription;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\ListPartnerSubscriptions;

class PartnerBilling extends Resource
{
    public function listPartnerSubscriptions(): Response
    {
        return $this->connector->send(new ListPartnerSubscriptions());
    }

    public function getPartnerSubscription(
        string $partnerSubscriptionId,
    ): Response {
        return $this->connector->send(new GetPartnerSubscription($partnerSubscriptionId));
    }

    public function createPartnerSubscriptionToken(): Response
    {
        return $this->connector->send(new CreatePartnerSubscriptionToken());
    }

    public function getPartnerSubcriptionByToken(
        string $partnerSubscriptionToken,
    ): Response {
        return $this->connector->send(new GetPartnerSubcriptionByToken($partnerSubscriptionToken));
    }

    public function createPartnerSubscriptionTokenForUpdate(): Response
    {
        return $this->connector->send(new CreatePartnerSubscriptionTokenForUpdate());
    }
}
