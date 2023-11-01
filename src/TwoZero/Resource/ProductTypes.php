<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ProductTypes\GetProductType;
use SimpleSquid\Vend\TwoZero\Requests\ProductTypes\ListProductTypes;

class ProductTypes extends Resource
{
    public function getProductType(
        string $productTypeId,
    ): Response {
        return $this->connector->send(new GetProductType($productTypeId));
    }

    public function listProductTypes(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListProductTypes($after, $before, $pageSize));
    }
}
