<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Product Collection.
 */
class ProductCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): Product
    {
        return parent::current();
    }
}
