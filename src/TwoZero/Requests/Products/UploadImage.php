<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Contracts\Body\HasBody;
use Saloon\Data\MultipartValue;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasMultipartBody;

class UploadImage extends Request implements HasBody
{
    use HasMultipartBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/actions/image_upload";
    }

    /**
     * @param  \Psr\Http\Message\StreamInterface|resource|string  $file
     */
    public function __construct(
        protected string $productId,
        protected mixed $file,
    ) {
    }

    protected function defaultBody(): array
    {
        return [
            new MultipartValue(name: 'image', value: $this->file),
        ];
    }
}
