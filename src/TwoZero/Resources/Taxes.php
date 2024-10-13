<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Taxes\ListTaxes;

class Taxes extends BaseResource
{
    public function listTaxes(
        ?int $after = null,
        ?int $before = null,
        ?bool $deleted = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListTaxes($after, $before, $deleted, $pageSize));
    }
}
