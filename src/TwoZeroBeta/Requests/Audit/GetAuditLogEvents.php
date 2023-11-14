<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Audit;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use SimpleSquid\Vend\Common\Paginators\VendOffsetPaginator;

class GetAuditLogEvents extends Request implements HasRequestPagination
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/auditlog_events';
    }

    public function __construct(
        protected ?string $pageSize = null,
        protected ?string $offset = null,
        protected ?string $from = null,
        protected ?string $to = null,
        protected ?string $order = null,
        protected ?string $userId = null,
        protected ?string $type = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'page_size' => $this->pageSize,
            'offset' => $this->offset,
            'from' => $this->from,
            'to' => $this->to,
            'order' => $this->order,
            'user_id' => $this->userId,
            'type' => $this->type,
        ]);
    }

    public function paginate(Connector $connector): VendOffsetPaginator
    {
        return new VendOffsetPaginator($connector, $this);
    }
}
