<?php

namespace SimpleSquid\Vend\ThreeZeroBeta;

use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use SimpleSquid\Vend\Common\Paginators\VendCursorPaginator;
use SimpleSquid\Vend\ThreeZeroBeta\Resources\Products;
use SimpleSquid\Vend\VendConnector;

/**
 * API 3.0 Beta
 *
 * Beta endpoints for version 3.0 of the Vend API.
 *
 * These may be subject to breaking changes.
 */
class VendThreeZeroBeta extends VendConnector implements HasPagination
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/3.0';
    }

    public function paginate(Request $request): VendCursorPaginator
    {
        return new class($this, $request) extends VendCursorPaginator
        {
            protected string $cursorKeyName = 'since_version';
        };
    }

    public function products(): Products
    {
        return new Products($this);
    }
}
