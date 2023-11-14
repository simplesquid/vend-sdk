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

    protected int $startCursor = 0;

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
        $cursor = $this->startCursor;

        if ($this->currentResponse instanceof Response) {
            $cursor = max($cursor, $this->currentResponse->json('version.max'));
        }

        $request->query()->add($this->cursorKeyName, $cursor);

        if (isset($this->perPageLimit)) {
            $request->query()->add($this->limitKeyName, $this->perPageLimit);
        }

        return $request;
    }

    public function setStartCursor(int $cursor): static
    {
        $this->startCursor = $cursor;

        return $this;
    }
}
