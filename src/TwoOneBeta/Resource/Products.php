<?php

namespace SimpleSquid\Vend\TwoOneBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoOneBeta\Requests\Products\CreateSingleVariant;
use SimpleSquid\Vend\TwoOneBeta\Requests\Products\UpdateProduct;

class Products extends Resource
{
    /**
     * @param  array<string, mixed>  $common
     * @param  array<string, mixed>  $details
     */
    public function updateProduct(
        string $id,
        array $common,
        array $details,
    ): Response {
        return $this->connector->send(new UpdateProduct($id, $common, $details));
    }

    /**
     * @param  array<string, mixed>  $common
     * @param  array<string, mixed>  $details
     */
    public function createSingleVariant(
        array $common,
        array $details,
    ): Response {
        return $this->connector->send(new CreateSingleVariant($common, $details));
    }
}
