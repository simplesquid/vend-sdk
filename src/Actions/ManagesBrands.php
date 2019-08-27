<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Brand;
use SimpleSquid\Vend\Resources\TwoDotZero\BrandCollection;

trait ManagesBrands
{
    /**
     * Get a single brand.
     * Returns a single brand with a requested ID
     *
     * @param  string  $id
     * @return Brand
     */
    public function brand(string $id): Brand
    {
        return $this->single(Brand::class, "2.0/brands/$id");
    }

    /**
     * List brands.
     * Returns a paginated list of brands.
     *
     * @param  int|null  $page_size
     * @param  int|null  $after
     * @param  int|null  $before
     * @return BrandCollection
     */
    public function brands(int $page_size = null, int $after = null, int $before = null): BrandCollection
    {
        return $this->collection(BrandCollection::class, '2.0/brands',
                                 compact('page_size', 'after', 'before'));
    }
}