<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Audit\ListSecurityEvents;

class Audit extends BaseResource
{
    public function listSecurityEvents(): Response
    {
        return $this->connector->send(new ListSecurityEvents);
    }
}
