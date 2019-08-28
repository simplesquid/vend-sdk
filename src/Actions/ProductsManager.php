<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\Product;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;

class ProductsManager
{
    use ManagesResources;

    /**
     * Get a single product.
     * Returns a single product object with a given ID.
     *
     * @param  string  $id  Valid product ID.
     *
     * @return \SimpleSquid\Vend\Resources\TwoDotZero\Product
     *
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Product
    {
        return $this->single(Product::class, "2.0/products/$id");
    }

    /**
     * Get inventory data for a single product.
     * Returns inventory data for a single product in all the outlets.
     *
     * @param  string    $product_id
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return InventoryCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function inventory(
        string $product_id,
        int $page_size = null,
        int $after = null,
        int $before = null
    ): InventoryCollection {
        return $this->collection(InventoryCollection::class, "2.0/products/$product_id/inventory",
                                 compact('page_size', 'after', 'before'));
    }

    /**
     * List products.
     * Returns a paginated list of products.
     *
     * @param  int|null   $page_size  The maximum number of items to be returned in the response.
     * @param  int|null   $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null   $before     The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted    Indicates whether deleted items should be included in the response.
     *
     * @return \SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(
        int $page_size = null,
        int $after = null,
        int $before = null,
        bool $deleted = null
    ): ProductCollection {
        return $this->collection(ProductCollection::class, '2.0/products',
                                 compact('page_size', 'after', 'before', 'deleted'));
    }

//    /**
//     * Upload a product image.
//     *
//     * @param  string  $id
//     * @param  $image
//     * @return ProductImage
//     */
//    public function uploadImage(string $id, $image): ProductImage
//    {
//        // TODO: multipart/form-data
//
//        $response = $this->post("2.0/products/$id/actions/image_upload", $image);
//
//        return new ProductImage($response['data']);
//    }
}