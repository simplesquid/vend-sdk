<?php

namespace SimpleSquid\Vend\ThreeZero;

use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use SimpleSquid\Vend\Common\Paginators\VendCursorPaginator;
use SimpleSquid\Vend\ThreeZero\Resources\PriceBooks;
use SimpleSquid\Vend\VendConnector;

/**
 * API 3.0
 *
 * Endpoints for version 3.0 of the Vend API.
 */
class VendThreeZero extends VendConnector implements HasPagination
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/3.0';
    }

    public function paginate(Request $request): VendCursorPaginator
    {
        return new VendCursorPaginator($this, $request);
    }

    public function priceBooks(): PriceBooks
    {
        return new PriceBooks($this);
    }
}
