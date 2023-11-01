<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Inventory\ListInventoryRecords;

class Inventory extends Resource
{
    public function listInventoryRecords(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListInventoryRecords($after, $before, $pageSize));
    }
}
