<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Tags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetTagByID
 *
 * Returns a single tag with a given ID.
 */
class GetTagById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tags/{$this->tagId}";
	}


	/**
	 * @param string $tagId The tag id
	 */
	public function __construct(
		protected string $tagId,
	) {
	}
}
