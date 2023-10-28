<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\GetAgendaOutletId;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\GetService;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\ListServiceItems;
use SimpleSquid\Vend\TwoZero\Requests\ServiceOrders\ListServices;

class ServiceOrders extends Resource
{
    /**
     * @param  int  $limit The maximum number of items to be returned in the response.
     */
    public function listServices(?int $limit): Response
    {
        return $this->connector->send(new ListServices($limit));
    }

    /**
     * @param  int  $limit The maximum number of items to be returned in the response.
     */
    public function listServiceItems(?int $limit): Response
    {
        return $this->connector->send(new ListServiceItems($limit));
    }

    /**
     * @param  string  $serviceId ID of the service to get
     */
    public function getService(string $serviceId): Response
    {
        return $this->connector->send(new GetService($serviceId));
    }

    public function getAgendaOutletId(string $outletId): Response
    {
        return $this->connector->send(new GetAgendaOutletId($outletId));
    }
}
