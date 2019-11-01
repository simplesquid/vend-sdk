<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Brand Collection.
 */
class ProductTypeCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): ProductType
    {
        return parent::current();
    }
}
