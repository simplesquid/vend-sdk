<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Brand;
use SimpleSquid\Vend\Resources\TwoDotZero\BrandCollection;

trait ManagesBrands
{
    /**
     * List brands.
     * Returns a paginated list of brands.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @return BrandCollection
     */
    public function brands(int $page_size = null, int $after = null, int $before = null): BrandCollection
    {
        return $this->collection(BrandCollection::class, "2.0/brands",
                                 compact('page_size', 'after', 'before'));
    }

    /**
     * Get a single brand.
     * Returns a single brand with a requested ID.
     *
     * @param  string  $id  Valid brand ID.
     * @return Brand
     */
    public function brand(string $id): Brand
    {
        return $this->single(Brand::class, "2.0/brands/$id");
    }
}