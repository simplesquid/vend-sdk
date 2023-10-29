<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\CreateSerialnumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\DeleteSerialnumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\GetSerialnumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\GetSerialnumbers;

class SerialNumbers extends Resource
{
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

    public function getSerialnumber(string $serialnumberId): Response
    {
        return $this->connector->send(new GetSerialnumber($serialnumberId));
    }

    public function deleteSerialnumber(string $serialnumberId): Response
    {
        return $this->connector->send(new DeleteSerialnumber($serialnumberId));
    }
}
