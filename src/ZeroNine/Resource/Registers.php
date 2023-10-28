<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Registers\ListRegisters;

class Registers extends Resource
{
    /**
     * @param  bool  $deleted Indicates whether deleted items should be included in the result.
     */
    public function listRegisters(?bool $deleted): Response
    {
        return $this->connector->send(new ListRegisters($deleted));
    }
}
