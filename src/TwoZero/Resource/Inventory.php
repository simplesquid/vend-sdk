<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Inventory\ListInventoryRecords;

class Inventory extends Resource
{
    public function listInventoryRecords(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListInventoryRecords($before, $pageSize));
    }
}
