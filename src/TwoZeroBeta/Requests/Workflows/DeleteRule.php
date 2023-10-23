<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-rule
 *
 * Delete a business rule.
 */
class DeleteRule extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/workflows/rules/{$this->ruleId}";
	}


	/**
	 * @param string $ruleId The ID of the business rules that you want deleted.
	 */
	public function __construct(
		protected string $ruleId,
	) {
	}
}
