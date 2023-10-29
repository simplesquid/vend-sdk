<?php

namespace SimpleSquid\Vend\TwoZero\Requests\SerialNumbers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteSerialNumber extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/serialnumbers/{$this->serialNumberId}";
    }

    public function __construct(
        protected string $serialNumberId,
    ) {
    }
}
