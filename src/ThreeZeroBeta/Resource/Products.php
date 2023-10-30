<?php

namespace SimpleSquid\Vend\ThreeZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ThreeZeroBeta\Requests\Products\GetProduct;
use SimpleSquid\Vend\ThreeZeroBeta\Requests\Products\ListProducts;

class Products extends Resource
{
    public function getProduct(
        string $productId,
    ): Response {
        return $this->connector->send(new GetProduct($productId));
    }

    public function listProducts(
        ?int $sinceVersion = null,
        ?int $pageSize = null,
        ?bool $includeDeleted = null,
    ): Response {
        return $this->connector->send(new ListProducts($sinceVersion, $pageSize, $includeDeleted));
    }
}
