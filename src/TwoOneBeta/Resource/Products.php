<?php

namespace SimpleSquid\Vend\TwoOneBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoOneBeta\Requests\Products\AddSingleVariant;
use SimpleSquid\Vend\TwoOneBeta\Requests\Products\UpdateProduct;
use SimpleSquid\Vend\TwoOneBeta\Resource;

class Products extends Resource
{
    /**
     * @param  string  $productId The object identifier of the Product to update.
     */
    public function updateProduct(string $productId): Response
    {
        return $this->connector->send(new UpdateProduct($productId));
    }

    public function addSingleVariant(): Response
    {
        return $this->connector->send(new AddSingleVariant());
    }
}
