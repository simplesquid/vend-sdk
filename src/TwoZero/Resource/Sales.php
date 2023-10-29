<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Sales\GetSaleById;
use SimpleSquid\Vend\TwoZero\Requests\Sales\InitReturnSale;
use SimpleSquid\Vend\TwoZero\Requests\Sales\ListSales;

class Sales extends Resource
{
    public function listSales(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListSales($before, $pageSize));
    }

    public function getSaleById(string $saleId): Response
    {
        return $this->connector->send(new GetSaleById($saleId));
    }

    public function initReturnSale(string $saleId): Response
    {
        return $this->connector->send(new InitReturnSale($saleId));
    }
}
