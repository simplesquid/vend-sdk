<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\FulfillSale;
use SimpleSquid\Vend\TwoZero\Requests\Fulfillment\ListSaleFulfillments;

class Fulfillment extends Resource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function fulfillSale(
        string $saleId,
        array $payload,
    ): Response {
        return $this->connector->send(new FulfillSale($saleId, $payload));
    }

    public function listSaleFulfillments(
        string $saleId,
    ): Response {
        return $this->connector->send(new ListSaleFulfillments($saleId));
    }
}
