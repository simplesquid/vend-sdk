<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Brand Collection.
 */
class WebhookCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): Webhook
    {
        return parent::current();
    }
}
