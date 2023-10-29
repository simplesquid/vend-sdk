<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\GetQuote;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\ListQuotes;

class Quotes extends Resource
{
    public function getQuote(string $quoteId): Response
    {
        return $this->connector->send(new GetQuote($quoteId));
    }

    public function listQuotes(?int $limit): Response
    {
        return $this->connector->send(new ListQuotes($limit));
    }
}
