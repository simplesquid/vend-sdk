<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Registers\CloseRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\GetRegisterById;
use SimpleSquid\Vend\TwoZero\Requests\Registers\ListRegisters;
use SimpleSquid\Vend\TwoZero\Requests\Registers\OpenRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\RegisterPaymentsSummary;

class Registers extends Resource
{
    public function listRegisters(?int $before, ?bool $deleted, ?int $pageSize): Response
    {
        return $this->connector->send(new ListRegisters($before, $deleted, $pageSize));
    }

    public function getRegisterById(string $registerId): Response
    {
        return $this->connector->send(new GetRegisterById($registerId));
    }

    public function openRegister(string $registerId): Response
    {
        return $this->connector->send(new OpenRegister($registerId));
    }

    public function closeRegister(string $registerId): Response
    {
        return $this->connector->send(new CloseRegister($registerId));
    }

    public function registerPaymentsSummary(string $registerId): Response
    {
        return $this->connector->send(new RegisterPaymentsSummary($registerId));
    }
}
