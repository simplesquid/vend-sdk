<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZeroBeta\Requests\Audit\GetAuditLogEvents;

class Audit extends Resource
{
    /**
     * @param  string  $pageSize The size for a single page of results. By default 100 events will be returned.
     * @param  string  $offset The number of objects to skip.
     * @param  string  $from The lower limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
     * @param  string  $to The upper limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
     * @param  string  $order The sorting order for the results. Sorting is done by the `occurred_at` parameter. The default order is descending.
     * @param  string  $userId The `id` of the user to filter the events by.
     * @param  string  $type The `type` of the events to be filtered for the response.
     */
    public function getAuditLogEvents(
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
