<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Quotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-quotes
 *
 * Returns a paginated list of quotes.
 */
class GetQuotes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/quotes";
	}


	/**
	 * @param null|int $limit The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?int $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit]);
	}
}
