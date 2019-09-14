<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Image;
use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\Product;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;

class ProductsManager
{
    use ManagesResources;

    /**
     * Create a product.
     * Returns a single new product object.
     *
     * @param  array  $body  TODO: Could use ProductUpdateBase.
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\Product
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create(array $body): \SimpleSquid\Vend\Resources\ZeroDotNine\Product
    {
        return $this->createResource(\SimpleSquid\Vend\Resources\ZeroDotNine\Product::class, 'products', $body);
    }

    /**
     * Update a product.
     * Returns a single updated product object.
     *
     * @param  string  $id    A valid product ID.
     * @param  array   $body  TODO: Could use ProductUpdateBase.
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\Product
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function update(string $id, array $body): \SimpleSquid\Vend\Resources\ZeroDotNine\Product
    {
        return $this->createResource(\SimpleSquid\Vend\Resources\ZeroDotNine\Product::class, 'products', array_merge(compact('id'), $body));
    }

    /**
     * Delete a product.
     * Deleted a product by ID.
     *
     * @param  string  $id  The ID of the product to be deleted.
     *
     * @return bool
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function delete(string $id): bool
    {
        return $this->deleteResource("products/$id");
    }

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
     * @param  string    $product_id  Valid product ID.
     * @param  int|null  $page_size   The maximum number of items to be returned in the response.
     * @param  int|null  $after       The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before      The upper limit for the version numbers to be included in the response.
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

    /**
     * Upload an image.
     * Upload a binary file with an image to be used for a product. This request should be encoded as `multipart/form-data`.
     *
     * @param  string    $product_id  The ID of the product which the imaged should be associated with.
     * @param  resource  $image       File to upload. Can be in `jpg` or `png` format. TODO: Check this is correct format.
     *
     * @return Image
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */

    public function uploadImage(string $product_id, $image): Image
    {
        $response = $this->vend->post("2.0/products/$product_id/actions/image_upload", [
            [
                'name'     => 'image',
                'contents' => $image
            ]
        ], 'multipart');

        return new Image($response['product']);
    }
}