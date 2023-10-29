<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Brands\CreateBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\GetBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\ListBrands;

class Brands extends Resource
{
    public function listBrands(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListBrands($before, $pageSize));
    }

    public function createBrand(): Response
    {
        return $this->connector->send(new CreateBrand());
    }

    public function getBrand(
        string $brandId,
    ): Response {
        return $this->connector->send(new GetBrand($brandId));
    }
}
