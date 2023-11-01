<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\ProductCategories\CreateAndUpdateProductCategories;
use SimpleSquid\Vend\TwoZero\Requests\ProductCategories\DeleteProductCategories;
use SimpleSquid\Vend\TwoZero\Requests\ProductCategories\ListProductCategories;

class ProductCategories extends BaseResource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createAndUpdateProductCategories(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateAndUpdateProductCategories($payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function deleteProductCategories(
        array $payload,
    ): Response {
        return $this->connector->send(new DeleteProductCategories($payload));
    }

    public function listProductCategories(
        ?string $parent = null,
        ?string $include = null,
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListProductCategories($parent, $include, $after, $before, $pageSize));
    }
}
