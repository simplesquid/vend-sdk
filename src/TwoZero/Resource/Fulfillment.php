<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\FulfillSale;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\GetFulfillmentsBySaleId;
use SimpleSquid\Vend\TwoZero\Resource;

class Fulfillment extends Resource
{
    /**
     * @param  string  $saleId The sale id
     */
    public function getFulfillmentsBySaleId(string $saleId): Response
    {
        return $this->connector->send(new GetFulfillmentsBySaleId($saleId));
    }

    /**
     * @param  string  $saleId The sale id
     */
    public function fulfillSale(string $saleId): Response
    {
        return $this->connector->send(new FulfillSale($saleId));
    }
}
