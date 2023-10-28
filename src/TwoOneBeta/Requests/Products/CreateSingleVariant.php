<?php

namespace SimpleSquid\Vend\TwoOneBeta\Requests\Products;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateSingleVariant extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/products';
    }

    /**
     * @param  array<string, mixed>  $common
     * @param  array<string, mixed>  $details
     */
    public function __construct(
        protected array $common,
        protected array $details,
    ) {
    }

    public function defaultBody(): array
    {
        return [
            'common' => $this->common,
            'details' => $this->details,
        ];
    }
}
