<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\OutletProductTaxes\ListProductTaxesForOutlet;

class OutletProductTaxes extends BaseResource
{
    public function listProductTaxesForOutlet(
        ?string $outletId = null,
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
        ?bool $deleted = null,
    ): Response {
        return $this->connector->send(new ListProductTaxesForOutlet($outletId, $after, $before, $pageSize, $deleted));
    }
}
