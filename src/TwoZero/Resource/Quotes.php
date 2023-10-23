<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\GetQuoteQuoteId;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\GetQuotes;
use SimpleSquid\Vend\TwoZero\Resource;

class Quotes extends Resource
{
	/**
	 * @param string $quoteId ID of the quote to get
	 */
	public function getQuoteQuoteId(string $quoteId): Response
	{
		return $this->connector->send(new GetQuoteQuoteId($quoteId));
	}


	/**
	 * @param int $limit The maximum number of items to be returned in the response.
	 */
	public function getQuotes(?int $limit): Response
	{
		return $this->connector->send(new GetQuotes($limit));
	}
}
