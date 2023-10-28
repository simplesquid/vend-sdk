<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Audit\GetSecurityEvents;

class Audit extends Resource
{
    public function getSecurityEvents(): Response
    {
        return $this->connector->send(new GetSecurityEvents());
    }
}
