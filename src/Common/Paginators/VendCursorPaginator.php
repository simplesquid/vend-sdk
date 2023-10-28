<?php

namespace SimpleSquid\Vend\Common\Paginators;

use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;

class VendCursorPaginator extends Paginator
{
    protected ?int $perPageLimit = 100;

    protected string $cursorKeyName = 'after';

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
        if ($this->currentResponse instanceof Response) {
            $request->query()->add($this->cursorKeyName, $this->currentResponse->json('version.max'));
        }

        if (isset($this->perPageLimit)) {
            $request->query()->add($this->limitKeyName, $this->perPageLimit);
        }

        return $request;
    }
}
