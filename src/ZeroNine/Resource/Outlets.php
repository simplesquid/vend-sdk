<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Outlets\ListOutlets;
use SimpleSquid\Vend\ZeroNine\Resource;

class Outlets extends Resource
{
    public function listOutlets(): Response
    {
        return $this->connector->send(new ListOutlets());
    }
}
