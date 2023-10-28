<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Taxes\ListTaxes;
use SimpleSquid\Vend\TwoZero\Resource;

class Taxes extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listTaxes(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListTaxes($before, $pageSize));
    }
}
