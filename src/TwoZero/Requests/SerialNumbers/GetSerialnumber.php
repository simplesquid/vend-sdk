<?php

namespace SimpleSquid\Vend\TwoZero\Requests\SerialNumbers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSerialnumber extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/serialnumbers/{$this->serialnumberId}";
    }

    public function __construct(
        protected string $serialnumberId,
    ) {
    }
}
