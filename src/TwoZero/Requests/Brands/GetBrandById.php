<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Brands;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetBrandByID
 *
 * Returns a single brand with a requested ID
 */
class GetBrandById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/brands/{$this->brandId}";
    }

    /**
     * @param  string  $brandId The brand id
     */
    public function __construct(
        protected string $brandId,
    ) {
    }
}
