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
class SalesCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): Sale
    {
        return parent::current();
    }

}