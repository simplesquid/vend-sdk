<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use SimpleSquid\Vend\Resources\CastsCollection;
use SimpleSquid\Vend\Resources\HasVersions;
use Spatie\DataTransferObject\DataTransferObjectCollection;

/**
 * Brand Collection
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class WebhookCollection extends DataTransferObjectCollection
{
    use CastsCollection, HasVersions;

    public function current(): Webhook
    {
        return parent::current();
    }

}