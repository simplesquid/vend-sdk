<?php

namespace SimpleSquid\Vend\ZeroNine;

use SimpleSquid\Vend\VendConnector;
use SimpleSquid\Vend\ZeroNine\Resource\RegisterSales;
use SimpleSquid\Vend\ZeroNine\Resource\Suppliers;
use SimpleSquid\Vend\ZeroNine\Resource\Taxes;

/**
 * API 0.9
 *
 * Endpoints for version 0.9 of the Vend API.
 */
class VendZeroNine extends VendConnector
{
    public function registerSales(): RegisterSales
    {
        return new RegisterSales($this);
    }

    public function suppliers(): Suppliers
    {
        return new Suppliers($this);
    }

    public function taxes(): Taxes
    {
        return new Taxes($this);
    }
}
