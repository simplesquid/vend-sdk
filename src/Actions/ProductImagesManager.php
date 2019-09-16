<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Image;

class ProductImagesManager
{
    use ManagesResources;

    /**
     * Delete a product_image.
     * Deletes the product_image with the requested ID.
     *
     * @param  string  $id  Valid product image ID.
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
        return $this->deleteResource("2.0/product_images/$id");
    }

    /**
     * Get a single product_image data.
     * Returns the metadata for a single product image with a given ID. This method is useful for checking the status of an image after it was uploaded.
     *
     * @param  string  $id  Valid product image ID.
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

    /**
     * Set image position.
     * Allows for changing the image position in the list
     *
     * @param  string  $id    Valid product image ID.
     * @param  array   $body  TODO: Could use ImagePosition object.
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

    public function updatePosition(string $id, array $body): Image
    {
        return $this->updateResource(Image::class, "2.0/product_images/$id", $body);
    }
}