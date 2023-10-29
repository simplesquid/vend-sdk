<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\FulfillSale;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\ListSaleFulfillments;

class Fulfillment extends Resource
{
    public function listSaleFulfillments(
        string $saleId,
    ): Response {
        return $this->connector->send(new ListSaleFulfillments($saleId));
    }

    public function fulfillSale(
        string $saleId,
    ): Response {
        return $this->connector->send(new FulfillSale($saleId));
    }
}
