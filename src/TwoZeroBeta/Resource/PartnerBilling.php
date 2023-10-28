<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\PartnerSubscription;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\PartnerSubscriptions;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\PartnerToken;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\PartnerTokenGet;
use SimpleSquid\Vend\TwoZeroBeta\Requests\PartnerBilling\PartnerUpdateSubscriptionToken;

class PartnerBilling extends Resource
{
    public function partnerSubscriptions(): Response
    {
        return $this->connector->send(new PartnerSubscriptions());
    }

    public function partnerSubscription(string $subscriptionId): Response
    {
        return $this->connector->send(new PartnerSubscription($subscriptionId));
    }

    public function partnerToken(): Response
    {
        return $this->connector->send(new PartnerToken());
    }

    /**
     * @param  string  $partnerSubscriptionToken The partner subscription token
     */
    public function partnerTokenGet(string $partnerSubscriptionToken): Response
    {
        return $this->connector->send(new PartnerTokenGet($partnerSubscriptionToken));
    }

    public function partnerUpdateSubscriptionToken(): Response
    {
        return $this->connector->send(new PartnerUpdateSubscriptionToken());
    }
}
