<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\GetOutletServicesAgenda;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\GetService;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\ListServiceItems;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\ListServices;

class ServiceOrders extends Resource
{
    public function listServices(
        ?int $limit,
    ): Response {
        return $this->connector->send(new ListServices($limit));
    }

    public function listServiceItems(
        ?int $limit,
    ): Response {
        return $this->connector->send(new ListServiceItems($limit));
    }

    public function getService(
        string $serviceId,
    ): Response {
        return $this->connector->send(new GetService($serviceId));
    }

    public function getOutletServicesAgenda(
        string $outletId,
    ): Response {
        return $this->connector->send(new GetOutletServicesAgenda($outletId));
    }
}
