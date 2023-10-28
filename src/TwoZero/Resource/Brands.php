<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Brands\CreateBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\GetBrandById;
use SimpleSquid\Vend\TwoZero\Requests\Brands\ListBrands;
use SimpleSquid\Vend\TwoZero\Resource;

class Brands extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listBrands(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListBrands($before, $pageSize));
    }

    public function createBrand(): Response
    {
        return $this->connector->send(new CreateBrand());
    }

    /**
     * @param  string  $brandId The brand id
     */
    public function getBrandById(string $brandId): Response
    {
        return $this->connector->send(new GetBrandById($brandId));
    }
}
