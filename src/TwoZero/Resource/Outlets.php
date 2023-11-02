<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\GetOutlet;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\ListOutlets;

class Outlets extends BaseResource
{
    public function getOutlet(
        string $outletId,
    ): Response {
        return $this->connector->send(new GetOutlet($outletId));
    }

    public function listOutlets(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
        ?bool $deleted = null,
    ): Response {
        return $this->connector->send(new ListOutlets($after, $before, $pageSize, $deleted));
    }
}