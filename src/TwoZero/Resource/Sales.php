<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Sales\GetSale;
use SimpleSquid\Vend\TwoZero\Requests\Sales\ListSales;
use SimpleSquid\Vend\TwoZero\Requests\Sales\ReturnSale;

class Sales extends Resource
{
    public function getSale(
        string $saleId,
    ): Response {
        return $this->connector->send(new GetSale($saleId));
    }

    public function listSales(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListSales($after, $before, $pageSize));
    }

    public function returnSale(
        string $saleId,
    ): Response {
        return $this->connector->send(new ReturnSale($saleId));
    }
}
