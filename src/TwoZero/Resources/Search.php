<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Search\Search as SearchRequest;

class Search extends BaseResource
{
    /**
     * @param  array<string, mixed>  $searchAttributes
     */
    public function search(
        string $type,
        array $searchAttributes,
        ?string $orderDirection = null,
        ?string $orderBy = null,
        ?int $pageSize = null,
        ?int $offset = null,
    ): Response {
        return $this->connector->send(new SearchRequest(
            $type,
            $searchAttributes,
            $orderBy,
            $orderDirection,
            $pageSize,
            $offset,
        ));
    }
}
