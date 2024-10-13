<?php

namespace SimpleSquid\Vend\TwoZero\Requests\SerialNumbers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSerialNumber extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/serialnumbers/{$this->serialNumberId}";
    }

    public function __construct(
        protected string $serialNumberId,
    ) {}
}
