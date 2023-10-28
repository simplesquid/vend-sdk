<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Retailers\GetRetailer;

class Retailers extends Resource
{
    public function getRetailer(): Response
    {
        return $this->connector->send(new GetRetailer());
    }
}
