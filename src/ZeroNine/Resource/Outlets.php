<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Outlets\ListOutlets;

class Outlets extends Resource
{
    public function listOutlets(): Response
    {
        return $this->connector->send(new ListOutlets());
    }
}
