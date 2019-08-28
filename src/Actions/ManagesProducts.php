<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\Product;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;

trait ManagesProducts
{
    /**
     * Get a single product.
     * Returns a single product object with a given ID.
     *
     * @param  string  $id  Valid product ID.
     *
     * @return Product
     */
    public function product(string $id): Product
    {
        return $this->single(Product::class, "2.0/products/$id");
    }

    /**
     * Get inventory data for a single product.
     * Returns inventory data for a single product in all the outlets.
     *
     * @param  string  $product_id
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     *
     * @return InventoryCollection
     */
    public function productInventory(
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
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted  Indicates whether deleted items should be included in the response.
     *
     * @return ProductCollection
     */
    public function products(
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
//    public function uploadProductImage(string $id, $image): ProductImage
//    {
//        // TODO: multipart/form-data
//
//        $response = $this->post("2.0/products/$id/actions/image_upload", $image);
//
//        return new ProductImage($response['data']);
//    }
}