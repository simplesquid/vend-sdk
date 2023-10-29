<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\CreateSerialNumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\DeleteSerialNumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\GetSerialNumber;
use SimpleSquid\Vend\TwoZero\Requests\SerialNumbers\ListSerialNumbers;

class SerialNumbers extends Resource
{
    public function listSerialNumbers(
        ?string $productId,
        ?string $outletId,
        ?string $saleId,
        ?string $lineItemId,
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListSerialNumbers($productId, $outletId, $saleId, $lineItemId, $before, $pageSize));
    }

    public function createSerialNumber(): Response
    {
        return $this->connector->send(new CreateSerialNumber());
    }

    public function getSerialNumber(
        string $id,
    ): Response {
        return $this->connector->send(new GetSerialNumber($id));
    }

    public function deleteSerialNumber(
        string $id,
    ): Response {
        return $this->connector->send(new DeleteSerialNumber($id));
    }
}
