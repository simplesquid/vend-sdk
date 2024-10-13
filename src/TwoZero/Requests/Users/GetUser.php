<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetUser extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}";
    }

    public function __construct(
        protected string $userId,
    ) {}
}
