<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Sales\GetSaleById;
use SimpleSquid\Vend\TwoZero\Requests\Sales\InitReturnSale;
use SimpleSquid\Vend\TwoZero\Requests\Sales\ListSales;

class Sales extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listSales(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListSales($before, $pageSize));
    }

    /**
     * @param  string  $saleId A completed sale ID - a valid sale with status of `CLOSED`, `ONACCOUNT_CLOSED` or `LAYBY_CLOSED`
     */
    public function getSaleById(string $saleId): Response
    {
        return $this->connector->send(new GetSaleById($saleId));
    }

    /**
     * @param  string  $saleId A completed sale ID - a valid sale with status of `CLOSED`, `ONACCOUNT_CLOSED` or `LAYBY_CLOSED`.
     */
    public function initReturnSale(string $saleId): Response
    {
        return $this->connector->send(new InitReturnSale($saleId));
    }
}
