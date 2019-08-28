<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Inventory Collection
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class InventoryCountItemCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): InventoryCountItem
    {
        return parent::current();
    }

}