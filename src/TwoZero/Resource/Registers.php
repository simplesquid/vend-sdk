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
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listRegisters(?int $before, ?bool $deleted, ?int $pageSize): Response
    {
        return $this->connector->send(new ListRegisters($before, $deleted, $pageSize));
    }

    /**
     * @param  string  $registerId The register id
     */
    public function getRegisterById(string $registerId): Response
    {
        return $this->connector->send(new GetRegisterById($registerId));
    }

    /**
     * @param  string  $registerId The register id
     */
    public function openRegister(string $registerId): Response
    {
        return $this->connector->send(new OpenRegister($registerId));
    }

    /**
     * @param  string  $registerId The register id
     */
    public function closeRegister(string $registerId): Response
    {
        return $this->connector->send(new CloseRegister($registerId));
    }

    /**
     * @param  string  $registerId The register id
     */
    public function registerPaymentsSummary(string $registerId): Response
    {
        return $this->connector->send(new RegisterPaymentsSummary($registerId));
    }
}
