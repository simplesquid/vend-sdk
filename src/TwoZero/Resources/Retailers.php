<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Retailers\GetRetailer;

class Retailers extends BaseResource
{
    public function getRetailer(): Response
    {
        return $this->connector->send(new GetRetailer);
    }
}
