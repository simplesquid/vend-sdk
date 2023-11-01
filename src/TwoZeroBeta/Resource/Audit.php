<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Audit\GetAuditLogEvents;

class Audit extends Resource
{
    public function listAuditEvents(
        ?string $pageSize = null,
        ?string $offset = null,
        ?string $from = null,
        ?string $to = null,
        ?string $order = null,
        ?string $userId = null,
        ?string $type = null,
    ): Response {
        return $this->connector->send(new GetAuditLogEvents($pageSize, $offset, $from, $to, $order, $userId, $type));
    }
}
