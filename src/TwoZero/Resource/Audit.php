<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Audit\GetSecurityEvents;
use SimpleSquid\Vend\TwoZero\Resource;

class Audit extends Resource
{
	public function getSecurityEvents(): Response
	{
		return $this->connector->send(new GetSecurityEvents());
	}
}
