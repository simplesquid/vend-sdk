<?php

namespace SimpleSquid\Vend\TwoOneBeta;

use SimpleSquid\Vend\TwoOneBeta\Resources\Products;
use SimpleSquid\Vend\VendConnector;

/**
 * API 2.1 Beta
 *
 * Beta endpoints for version 2.1 of the Vend API.
 *
 * These may be subject to breaking changes.
 */
class VendTwoOneBeta extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/2.1';
    }

    public function products(): Products
    {
        return new Products($this);
    }
}
