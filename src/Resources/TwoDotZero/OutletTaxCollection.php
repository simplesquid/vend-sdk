<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Brand Collection
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class OutletTaxCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): OutletTax
    {
        return parent::current();
    }

}