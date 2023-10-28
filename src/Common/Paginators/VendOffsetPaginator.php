<?php

namespace SimpleSquid\Vend\Common\Paginators;

use LogicException;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\OffsetPaginator;

class VendOffsetPaginator extends OffsetPaginator
{
    protected ?int $perPageLimit = 100;

    protected string $offsetKeyName = 'offset';

    protected string $limitKeyName = 'page_size';

    protected function isLastPage(Response $response): bool
    {
        return empty($response->json('data'));
    }

    protected function getPageItems(Response $response, Request $request): array
    {
        return $response->json('data');
    }

    protected function applyPagination(Request $request): Request
    {
        if (is_null($this->perPageLimit)) {
            throw new LogicException('Please define the $perPageLimit property on your paginator or use the setPerPageLimit method');
        }

        $request->query()->merge([
            $this->limitKeyName => $this->perPageLimit,
            $this->offsetKeyName => $this->getOffset(),
        ]);

        return $request;
    }
}
