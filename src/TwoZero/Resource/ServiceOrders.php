<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\GetOutletServicesAgenda;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\GetService;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\ListServiceItems;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\ListServices;

class ServiceOrders extends BaseResource
{
    public function getOutletServicesAgenda(
        string $outletId,
        string $startDate,
        ?int $days = null,
    ): Response {
        return $this->connector->send(new GetOutletServicesAgenda($outletId, $startDate, $days));
    }

    public function getService(
        string $serviceId,
    ): Response {
        return $this->connector->send(new GetService($serviceId));
    }

    public function listServiceItems(
        ?int $after = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new ListServiceItems($after, $limit));
    }

    public function listServices(
        ?int $after = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new ListServices($after, $limit));
    }
}
