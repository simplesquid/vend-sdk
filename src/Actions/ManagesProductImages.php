<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Image;

trait ManagesProductImages
{
    /**
     * Get a single product_image data.
     * Returns the metadata for a single product image with a given ID. This method is useful for checking the status of an image after it was uploaded.
     *
     * @param  string  $id
     * @return Image
     */
    public function productImage(string $id): Image
    {
        return $this->single(Image::class, "2.0/product_images/$id");
    }
}