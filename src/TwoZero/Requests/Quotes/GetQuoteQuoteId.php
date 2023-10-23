<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Quotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-quote-quote_id
 *
 * Returns a single quote with a given ID.
 */
class GetQuoteQuoteId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/quotes/{$this->quoteId}";
	}


	/**
	 * @param string $quoteId ID of the quote to get
	 */
	public function __construct(
		protected string $quoteId,
	) {
	}
}
