<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Consignment Collection.
 */
class RequestLogCollection extends DataTransferObjectCollection
{
    use CastsCollection;

    public function current(): RequestLog
    {
        return parent::current();
    }
}
