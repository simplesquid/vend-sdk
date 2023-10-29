<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Sales\GetSale;
use SimpleSquid\Vend\TwoZero\Requests\Sales\ListSales;
use SimpleSquid\Vend\TwoZero\Requests\Sales\ReturnSale;

class Sales extends Resource
{
    public function listSales(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListSales($before, $pageSize));
    }

    public function getSale(
        string $id,
    ): Response {
        return $this->connector->send(new GetSale($id));
    }

    public function returnSale(
        string $id,
    ): Response {
        return $this->connector->send(new ReturnSale($id));
    }
}
