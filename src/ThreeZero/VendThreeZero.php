<?php

namespace SimpleSquid\Vend\ThreeZero;

use Saloon\Http\Connector;
use SimpleSquid\Vend\ThreeZero\Resource\PriceBooks;
use SimpleSquid\Vend\VendConnector;

/**
 * API 3.0
 *
 * Endpoints for version 3.0 of the Vend API.
 */
class VendThreeZero extends VendConnector
{
    public function resolveBaseUrl(): string
    {
        return parent::resolveBaseUrl().'/3.0';
    }

    public function priceBooks(): PriceBooks
    {
        return new PriceBooks($this);
    }
}
