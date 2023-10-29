<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\GetOutletById;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\ListOutlets;

class Outlets extends Resource
{
    public function listOutlets(?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListOutlets($before, $pageSize, $deleted));
    }

    public function getOutletById(string $outletId): Response
    {
        return $this->connector->send(new GetOutletById($outletId));
    }
}
