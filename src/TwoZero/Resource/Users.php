<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Users\GetUserById;
use SimpleSquid\Vend\TwoZero\Requests\Users\ListUsers;

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
