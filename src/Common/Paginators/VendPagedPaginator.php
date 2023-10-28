<?php

namespace SimpleSquid\Vend\Common\Paginators;

use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;

abstract class VendPagedPaginator extends PagedPaginator
{
    protected ?int $perPageLimit = 100;

    protected string $pageKeyName = 'page';

    protected string $limitKeyName = 'page_size';

    protected function isLastPage(Response $response): bool
    {
        return $this->getTotalPages($response) === $this->page;
    }

    abstract protected function getPageItems(Response $response, Request $request): array;

    protected function applyPagination(Request $request): Request
    {
        $request->query()->add($this->pageKeyName, $this->page);

        if (isset($this->perPageLimit)) {
            $request->query()->add($this->limitKeyName, $this->perPageLimit);
        }

        return $request;
    }

    protected function getTotalPages(Response $response): int
    {
        return $response->json('pagination.pages');
    }
}
