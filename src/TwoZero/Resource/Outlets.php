<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\GetOutlet;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\ListOutlets;

class Outlets extends Resource
{
    public function listOutlets(
        ?int $before,
        ?int $pageSize,
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new ListOutlets($before, $pageSize, $deleted));
    }

    public function getOutlet(
        string $outletId,
    ): Response {
        return $this->connector->send(new GetOutlet($outletId));
    }
}
