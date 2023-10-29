<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ProductTypes\GetProductTypeById;
use SimpleSquid\Vend\TwoZero\Requests\ProductTypes\ListProductTypes;

class ProductTypes extends Resource
{
    public function listProductTypes(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListProductTypes($before, $pageSize));
    }

    public function getProductTypeById(string $productTypeId): Response
    {
        return $this->connector->send(new GetProductTypeById($productTypeId));
    }
}
