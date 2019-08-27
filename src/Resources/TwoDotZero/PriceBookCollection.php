<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Price Book Collection
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class PriceBookCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): PriceBook
    {
        return parent::current();
    }

}