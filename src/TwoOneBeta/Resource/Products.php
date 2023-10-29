<?php

namespace SimpleSquid\Vend\TwoOneBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoOneBeta\Requests\Products\CreateSingleVariant;
use SimpleSquid\Vend\TwoOneBeta\Requests\Products\UpdateProduct;

class Products extends Resource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateProduct(
        string $id,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateProduct($id, $payload));
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public function createSingleVariant(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateSingleVariant($payload));
    }
}
