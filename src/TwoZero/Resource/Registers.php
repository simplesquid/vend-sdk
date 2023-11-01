<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Registers\CloseRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\GetRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\ListRegisters;
use SimpleSquid\Vend\TwoZero\Requests\Registers\OpenRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\RegisterPaymentsSummary;

class Registers extends Resource
{
    public function closeRegister(
        string $registerId,
    ): Response {
        return $this->connector->send(new CloseRegister($registerId));
    }

    public function getRegister(
        string $registerId,
    ): Response {
        return $this->connector->send(new GetRegister($registerId));
    }

    public function listRegisters(
        ?int $after = null,
        ?int $before = null,
        ?bool $deleted = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListRegisters($after, $before, $deleted, $pageSize));
    }

    public function openRegister(
        string $registerId,
    ): Response {
        return $this->connector->send(new OpenRegister($registerId));
    }

    public function registerPaymentsSummary(
        string $registerId,
    ): Response {
        return $this->connector->send(new RegisterPaymentsSummary($registerId));
    }
}
