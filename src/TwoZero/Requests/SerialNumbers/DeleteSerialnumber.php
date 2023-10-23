<?php

namespace SimpleSquid\Vend\TwoZero\Requests\SerialNumbers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-serialnumber
 *
 * Deletes a serial number.
 */
class DeleteSerialnumber extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/serialnumbers/{$this->serialnumberId}";
	}


	/**
	 * @param string $serialnumberId The serial number id
	 */
	public function __construct(
		protected string $serialnumberId,
	) {
	}
}
