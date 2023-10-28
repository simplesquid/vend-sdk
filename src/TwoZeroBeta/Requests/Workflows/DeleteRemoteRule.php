<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-remote-rule
 *
 * Delete a remote business rule.
 */
class DeleteRemoteRule extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/workflows/remote_rules/{$this->remoteRuleId}";
    }

    /**
     * @param  string  $remoteRuleId The ID of the remote business rules that you want deleted.
     */
    public function __construct(
        protected string $remoteRuleId,
    ) {
    }
}
