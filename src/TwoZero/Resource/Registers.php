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
    public function listRegisters(
        ?int $before,
        ?bool $deleted,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListRegisters($before, $deleted, $pageSize));
    }

    public function getRegister(
        string $id,
    ): Response {
        return $this->connector->send(new GetRegister($id));
    }

    public function openRegister(
        string $id,
    ): Response {
        return $this->connector->send(new OpenRegister($id));
    }

    public function closeRegister(
        string $id,
    ): Response {
        return $this->connector->send(new CloseRegister($id));
    }

    public function registerPaymentsSummary(
        string $id,
    ): Response {
        return $this->connector->send(new RegisterPaymentsSummary($id));
    }
}
