<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Image;

class ProductImagesManager
{
    use ManagesResources;

    /**
     * Get a single product_image data.
     * Returns the metadata for a single product image with a given ID. This method is useful for checking the status of an image after it was uploaded.
     *
     * @param  string  $id
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
    public function find(string $id): Image
    {
        return $this->single(Image::class, "2.0/product_images/$id");
    }
}