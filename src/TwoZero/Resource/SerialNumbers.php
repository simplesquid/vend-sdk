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
    public function createSerialNumber(): Response
    {
        return $this->connector->send(new CreateSerialNumber());
    }

    public function deleteSerialNumber(
        string $serialNumberId,
    ): Response {
        return $this->connector->send(new DeleteSerialNumber($serialNumberId));
    }

    public function getSerialNumber(
        string $serialNumberId,
    ): Response {
        return $this->connector->send(new GetSerialNumber($serialNumberId));
    }

    public function listSerialNumbers(
        ?string $productId = null,
        ?string $outletId = null,
        ?string $saleId = null,
        ?string $lineItemId = null,
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListSerialNumbers(
            $productId,
            $outletId,
            $saleId,
            $lineItemId,
            $after,
            $before,
            $pageSize,
        ));
    }
}
