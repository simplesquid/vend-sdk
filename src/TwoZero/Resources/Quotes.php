<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\GetQuote;
use SimpleSquid\Vend\TwoZero\Requests\Quotes\ListQuotes;

class Quotes extends BaseResource
{
    public function getQuote(
        string $quoteId,
    ): Response {
        return $this->connector->send(new GetQuote($quoteId));
    }

    public function listQuotes(
        ?int $after,
        ?int $limit,
    ): Response {
        return $this->connector->send(new ListQuotes($after, $limit));
    }
}
