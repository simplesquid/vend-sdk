<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Users\GetUser;
use SimpleSquid\Vend\TwoZero\Requests\Users\ListUsers;

class Users extends Resource
{
    public function getUser(
        string $userId,
    ): Response {
        return $this->connector->send(new GetUser($userId));
    }

    public function listUsers(
        ?int $before,
        ?int $pageSize,
    ): Response {
        return $this->connector->send(new ListUsers($before, $pageSize));
    }
}
