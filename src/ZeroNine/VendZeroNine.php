<?php

namespace SimpleSquid\Vend\ZeroNine;

use SimpleSquid\Vend\VendConnector;
use SimpleSquid\Vend\ZeroNine\Resources\RegisterSales;
use SimpleSquid\Vend\ZeroNine\Resources\Suppliers;
use SimpleSquid\Vend\ZeroNine\Resources\Taxes;

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
