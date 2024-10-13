<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetTag extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/tags/{$this->tagId}";
    }

    public function __construct(
        protected string $tagId,
    ) {}
}
