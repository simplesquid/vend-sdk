<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Channel Collection.
 */
class ChannelCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): Channel
    {
        return parent::current();
    }
}
