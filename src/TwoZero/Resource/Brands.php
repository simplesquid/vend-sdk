<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Brands\CreateBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\DeleteBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\GetBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\ListBrands;
use SimpleSquid\Vend\TwoZero\Requests\Brands\UpdateBrand;

class Brands extends Resource
{
    public function listBrands(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListBrands($before, $pageSize));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createBrand(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateBrand($payload));
    }

    public function getBrand(
        string $brandId,
    ): Response {
        return $this->connector->send(new GetBrand($brandId));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateBrand(
        string $brandId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateBrand($brandId, $payload));
    }

    public function deleteBrand(
        string $brandId,
    ): Response {
        return $this->connector->send(new DeleteBrand($brandId));
    }
}
