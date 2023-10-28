<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * UploadImage
 *
 * Upload a binary file with an image to be used for a product. This request should be encoded as
 * `multipart/form-data`.
 *
 * > **Please Note** If you are reading this on https://docs.vendhq.com then
 * the `Try It!` generated code will not work as the underlying code generator assumes the image will
 * be base64 encoded, which the API does not support. Please have a look at
 * https://docs.vendhq.com/docs/products_image_upload_basics instead.
 */
class UploadImage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/actions/image_upload";
    }

    /**
     * @param  string  $productId The product id
     */
    public function __construct(
        protected string $productId,
    ) {
    }
}
