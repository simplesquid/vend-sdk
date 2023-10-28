<?php

namespace SimpleSquid\Vend\ThreeZeroBeta;

use SimpleSquid\Vend\ThreeZeroBeta\Resource\Products;
use SimpleSquid\Vend\VendConnector;

/**
 * API 3.0 Beta
 *
 * Beta endpoints for version 3.0 of the Vend API.
 */
class VendThreeZeroBeta extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/3.0';
    }

    public function products(): Products
    {
        return new Products($this);
    }
}
