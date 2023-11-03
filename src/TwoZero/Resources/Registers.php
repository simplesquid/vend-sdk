<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Registers\CloseRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\GetRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\ListRegisters;
use SimpleSquid\Vend\TwoZero\Requests\Registers\OpenRegister;
use SimpleSquid\Vend\TwoZero\Requests\Registers\RegisterPaymentsSummary;

class Registers extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function closeRegister(
        string $registerId,
        array $payload,
    ): Response {
        return $this->connector->send(new CloseRegister($registerId, $payload));
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

    /**
     * @param  array<string, mixed>  $payload
     */
    public function openRegister(
        string $registerId,
        array $payload,
    ): Response {
        return $this->connector->send(new OpenRegister($registerId, $payload));
    }

    public function registerPaymentsSummary(
        string $registerId,
    ): Response {
        return $this->connector->send(new RegisterPaymentsSummary($registerId));
    }
}
