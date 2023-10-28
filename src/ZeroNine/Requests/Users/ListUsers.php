<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListUsers
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a
 * non-paginated list of users.
 */
class ListUsers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/users';
    }
}
