<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\InventoryCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\Product;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;

trait ManagesProducts
{
    /**
     * Create a new product.
     *
     * @param  array  $data
     * @return Product
     */
    public function createProduct(array $data)
    {
        return $this->createResource(Product::class, 'products', $data);
    }

    /**
     * Delete a product.
     *
     * @param  string  $id
     * @return bool
     */
    public function deleteProduct(string $id): bool
    {
        return $this->deleteResource("products/$id");
    }

    /**
     * Get a single product.
     * Returns a single product object with a given ID.
     *
     * @param  string  $id
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
     * @param  int|null  $page_size
     * @param  int|null  $after
     * @param  int|null  $before
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
     * @param  int|null  $page_size
     * @param  int|null  $after
     * @param  int|null  $before
     * @param  bool|null  $deleted
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

    /**
     * Update a product.
     *
     * @param  string  $id
     * @param  array  $data
     * @return Product
     */
    public function updateProduct(string $id, array $data): Product
    {
        return $this->createResource(Product::class, 'products', array_merge($data, compact('id')));
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