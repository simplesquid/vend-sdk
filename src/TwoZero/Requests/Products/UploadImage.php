<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Products;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UploadImage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->productId}/actions/image_upload";
    }

    public function __construct(
        protected string $productId,
    ) {
    }
}
