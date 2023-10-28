<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateUpdateSupplier extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/supplier';
    }

    /**
     * @param  array<string, string>|null  $contact
     */
    public function __construct(
        protected ?string $id = null,
        protected ?string $name = null,
        protected ?string $description = null,
        protected ?array $contact = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter([
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'contact' => $this->contact,
        ]);
    }
}
