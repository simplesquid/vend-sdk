<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\ZeroNine\Requests\Users\ListUsers;
use SimpleSquid\Vend\ZeroNine\Resource;

class Users extends Resource
{
	public function listUsers(): Response
	{
		return $this->connector->send(new ListUsers());
	}
}
