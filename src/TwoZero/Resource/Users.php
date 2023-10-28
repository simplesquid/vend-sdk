<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Users\GetUserById;
use SimpleSquid\Vend\TwoZero\Requests\Users\ListUsers;
use SimpleSquid\Vend\TwoZero\Resource;

class Users extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     */
    public function listUsers(?int $before, ?int $pageSize): Response
    {
        return $this->connector->send(new ListUsers($before, $pageSize));
    }

    /**
     * @param  string  $userId A valid user id
     */
    public function getUserById(string $userId): Response
    {
        return $this->connector->send(new GetUserById($userId));
    }
}
