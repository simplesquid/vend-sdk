<?php

namespace SimpleSquid\Vend\TwoZero\Resources;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\BaseResource;
use SimpleSquid\Vend\TwoZero\Requests\Users\GetUser;
use SimpleSquid\Vend\TwoZero\Requests\Users\ListUsers;

class Users extends BaseResource
{
    public function getUser(
        string $userId,
    ): Response {
        return $this->connector->send(new GetUser($userId));
    }

    public function listUsers(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
    ): Response {
        return $this->connector->send(new ListUsers($after, $before, $pageSize));
    }
}