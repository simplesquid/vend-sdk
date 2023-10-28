<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\CreateSerialnumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\DeleteSerialnumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\GetSerialnumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\GetSerialnumbers;

class SerialNumbers extends Resource
{
    /**
     * @param  string  $productId A product ID. This filters the serial numbers to only include ones on this product.
     * @param  string  $outletId An outlet ID. This filters the serial numbers to only include ones on this outlet.
     * @param  string  $saleId A sale ID. This filters the serial numbers to only include ones that were sold in the specified sale.
     * @param  string  $lineItemId A line item ID. This filters the serial numbers to only include ones sold in the specified line item.
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function getSerialnumbers(
        ?string $productId,
        ?string $outletId,
        ?string $saleId,
        ?string $lineItemId,
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new GetSerialnumbers($productId, $outletId, $saleId, $lineItemId, $before, $pageSize));
    }

    public function createSerialnumber(): Response
    {
        return $this->connector->send(new CreateSerialnumber());
    }

    /**
     * @param  string  $serialnumberId The serial number id
     */
    public function getSerialnumber(string $serialnumberId): Response
    {
        return $this->connector->send(new GetSerialnumber($serialnumberId));
    }

    /**
     * @param  string  $serialnumberId The serial number id
     */
    public function deleteSerialnumber(string $serialnumberId): Response
    {
        return $this->connector->send(new DeleteSerialnumber($serialnumberId));
    }
}
