<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * OpenRegister
 *
 * Opens a single register with the requested ID.
 */
class OpenRegister extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/registers/{$this->registerId}/actions/open";
	}


	/**
	 * @param string $registerId The register id
	 */
	public function __construct(
		protected string $registerId,
	) {
	}
}
