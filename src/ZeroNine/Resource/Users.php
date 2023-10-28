<?php

namespace SimpleSquid\Vend\ZeroNine\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\ZeroNine\Requests\Users\ListUsers;

class Users extends Resource
{
    public function listUsers(): Response
    {
        return $this->connector->send(new ListUsers());
    }
}
