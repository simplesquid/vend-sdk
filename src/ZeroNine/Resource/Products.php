<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Products\CreateUpdateProduct;
use SimpleSquid\Vend\ZeroNine\Requests\Products\GetProductById;
use SimpleSquid\Vend\ZeroNine\Requests\Products\ListProducts;
use SimpleSquid\Vend\ZeroNine\Resource;

class Products extends Resource
{
    /**
     * @param  string  $orderDirection Selects the order direction of the results returned. On of `ASC`(default), `DESC`.
     * @param  string  $since If included, returns only items modified since the given time. The provided date and time should be in **UTC** and formatted according to **ISO 8601**.
     * @param  string  $active If included, only active or inactive products will be returned. One of: `0` or `1`.
     * @param  string  $sku If included, only the product with given sku will be returned. It may happen that there will be more products with the same sku. In this case all of them will be returned.
     * @param  string  $handle If included, only products with given handle will be returned. This is useful for filtering all variants of a product, since all variants share the same handle.
     * @param  float|int  $page The number of the page of results to be returned.
     * @param  float|int  $pageSize The size of the page of results to be returned.
     */
    public function listProducts(
        ?string $orderDirection,
        ?string $since,
        ?string $active,
        ?string $sku,
        ?string $handle,
        float|int|null $page,
        float|int|null $pageSize,
    ): Response {
        return $this->connector->send(new ListProducts($orderDirection, $since, $active, $sku, $handle, $page, $pageSize));
    }

    public function createUpdateProduct(): Response
    {
        return $this->connector->send(new CreateUpdateProduct());
    }

    /**
     * @param  string  $productId An ID of an existing product.
     */
    public function getProductById(string $productId): Response
    {
        return $this->connector->send(new GetProductById($productId));
    }
}
