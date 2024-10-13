<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteRemoteRule extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/workflows/remote_rules/{$this->remoteRuleId}";
    }

    public function __construct(
        protected string $remoteRuleId,
    ) {}
}
