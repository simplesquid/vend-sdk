<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Brands\CreateBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\DeleteBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\GetBrand;
use SimpleSquid\Vend\TwoZero\Requests\Brands\ListBrands;
use SimpleSquid\Vend\TwoZero\Requests\Brands\UpdateBrand;

class Brands extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createBrand(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateBrand($payload));
    }

    public function deleteBrand(
        string $brandId,
    ): Response {
        return $this->connector->send(new DeleteBrand($brandId));
    }

    public function getBrand(
        string $brandId,
    ): Response {
        return $this->connector->send(new GetBrand($brandId));
    }

    public function listBrands(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListBrands($after, $before, $pageSize));
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
}
