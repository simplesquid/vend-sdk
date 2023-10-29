<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\OutletProductTaxes\ListOutletProductTaxes;

class OutletProductTaxes extends Resource
{
    public function listOutletProductTaxes(?string $outletId, ?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListOutletProductTaxes($outletId, $before, $pageSize, $deleted));
    }
}
