<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\FulfillSale;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\GetFulfillmentsBySaleId;

class Fulfillment extends Resource
{
    public function getFulfillmentsBySaleId(string $saleId): Response
    {
        return $this->connector->send(new GetFulfillmentsBySaleId($saleId));
    }

    public function fulfillSale(string $saleId): Response
    {
        return $this->connector->send(new FulfillSale($saleId));
    }
}
