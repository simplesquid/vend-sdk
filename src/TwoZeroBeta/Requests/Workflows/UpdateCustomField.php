<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateCustomField extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/workflows/custom_fields/{$this->customFieldId}";
    }

    public function __construct(
        protected string $customFieldId,
    ) {}
}
