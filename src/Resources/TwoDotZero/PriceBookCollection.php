<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Price Book Collection.
 */
class PriceBookCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): PriceBook
    {
        return parent::current();
    }
}
