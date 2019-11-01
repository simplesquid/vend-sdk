<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\User;
use SimpleSquid\Vend\Resources\TwoDotZero\UserCollection;

class UsersManager
{
    use ManagesResources;

    /**
     * Get a single user.
     * Returns a single user with the requested ID.
     *
     * @param  string  $id  Valid user ID.
     *
     * @return User
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): User
    {
        return $this->single(User::class, "2.0/users/$id");
    }

    /**
     * List users.
     * Returns a paginated list of users.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return UserCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(int $page_size = null, int $after = null, int $before = null): UserCollection
    {
        return $this->collection(UserCollection::class, '2.0/users', compact('after', 'before', 'page_size'));
    }
}
