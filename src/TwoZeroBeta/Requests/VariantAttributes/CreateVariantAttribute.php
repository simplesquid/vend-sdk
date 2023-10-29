<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateVariantAttribute extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/variant_attributes';
    }
}
