<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\GetQuoteQuoteId;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\GetQuotes;

class Quotes extends Resource
{
    public function getQuoteQuoteId(string $quoteId): Response
    {
        return $this->connector->send(new GetQuoteQuoteId($quoteId));
    }

    public function getQuotes(?int $limit): Response
    {
        return $this->connector->send(new GetQuotes($limit));
    }
}
