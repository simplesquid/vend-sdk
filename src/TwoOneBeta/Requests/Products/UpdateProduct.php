<?php

namespace SimpleSquid\Vend\TwoOneBeta\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateProduct extends Request
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/products/{$this->id}";
    }

    /**
     * @param  array<string, mixed>  $common
     * @param  array<string, mixed>  $details
     */
    public function __construct(
        protected string $id,
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
