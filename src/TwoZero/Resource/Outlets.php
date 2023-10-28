<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\GetOutletById;
use SimpleSquid\Vend\TwoZero\Requests\Outlets\ListOutlets;

class Outlets extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function listOutlets(?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListOutlets($before, $pageSize, $deleted));
    }

    /**
     * @param  string  $outletId The outlet id
     */
    public function getOutletById(string $outletId): Response
    {
        return $this->connector->send(new GetOutletById($outletId));
    }
}
