<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Tags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteTag extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/tags/{$this->tagId}";
    }

    public function __construct(
        protected string $tagId,
    ) {}
}
