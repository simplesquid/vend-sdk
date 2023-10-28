<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Retailers\GetRetailer;
use SimpleSquid\Vend\TwoZero\Resource;

class Retailers extends Resource
{
    public function getRetailer(): Response
    {
        return $this->connector->send(new GetRetailer());
    }
}
