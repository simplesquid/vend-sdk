<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetUserByID
 *
 * Returns a single user with the requested ID.
 */
class GetUserById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}";
	}


	/**
	 * @param string $userId A valid user id
	 */
	public function __construct(
		protected string $userId,
	) {
	}
}
