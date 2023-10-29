<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Audit\GetAuditLogEvents;

class Audit extends Resource
{
    public function listAuditEvents(
        ?string $pageSize,
        ?string $offset,
        ?string $from,
        ?string $to,
        ?string $order,
        ?string $userId,
        ?string $type,
    ): Response {
        return $this->connector->send(new GetAuditLogEvents($pageSize, $offset, $from, $to, $order, $userId, $type));
    }
}
