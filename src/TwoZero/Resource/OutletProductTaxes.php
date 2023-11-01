<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\OutletProductTaxes\ListProductTaxesForOutlet;

class OutletProductTaxes extends Resource
{
    public function listProductTaxesForOutlet(
        ?string $outletId,
        ?int $after,
        ?int $before,
        ?int $pageSize,
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new ListProductTaxesForOutlet($outletId, $after, $before, $pageSize, $deleted));
    }
}
