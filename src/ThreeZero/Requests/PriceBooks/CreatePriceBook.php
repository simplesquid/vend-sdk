<?php

namespace SimpleSquid\Vend\ThreeZero\Requests\PriceBooks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreatePriceBook extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/price_books';
    }

    /**
     * @param  string[]  $customerGroupIds
     * @param  string[]  $outletIds
     */
    public function __construct(
        protected string $name,
        protected array $customerGroupIds,
        protected array $outletIds,
        protected ?string $validFrom = null,
        protected ?string $validTo = null,
        protected ?string $restrictToPlatform = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'name' => $this->name,
            'customer_group_ids' => $this->customerGroupIds,
            'outlet_ids' => $this->outletIds,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'restrict_to_platform' => $this->restrictToPlatform,
        ]);
    }
}
