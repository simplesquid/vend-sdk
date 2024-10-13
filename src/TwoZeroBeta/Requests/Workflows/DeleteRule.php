<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteRule extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/workflows/rules/{$this->ruleId}";
    }

    public function __construct(
        protected string $ruleId,
    ) {}
}
