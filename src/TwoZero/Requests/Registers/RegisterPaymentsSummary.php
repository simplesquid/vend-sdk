<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * RegisterPaymentsSummary
 *
 * Returns a payload containing payment totals for all payments types defined in the account for a
 * single register.
 */
class RegisterPaymentsSummary extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/registers/{$this->registerId}/payments_summary";
	}


	/**
	 * @param string $registerId The register id
	 */
	public function __construct(
		protected string $registerId,
	) {
	}
}
