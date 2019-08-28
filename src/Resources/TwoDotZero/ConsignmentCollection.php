<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Consignment Collection
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class ConsignmentCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): Consignment
    {
        return parent::current();
    }

}