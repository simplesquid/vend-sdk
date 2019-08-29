<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Register;
use SimpleSquid\Vend\Resources\TwoDotZero\RegisterCollection;

class RegistersManager
{
    use ManagesResources;

    /**
     * Get a single register.
     * Returns a single register with the requested ID.
     *
     * @param  string  $id  Valid register ID.
     *
     * @return Register
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Register
    {
        return $this->single(Register::class, "2.0/registers/$id");
    }

    /**
     * List registers.
     * Returns a paginated list of registers.
     *
     * @param  int|null   $page_size  The maximum number of items to be returned in the response.
     * @param  int|null   $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null   $before     The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted    Indicates whether deleted items should be included in the response.
     *
     * @return RegisterCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(
        int $page_size = null,
        int $after = null,
        int $before = null,
        bool $deleted = null
    ): RegisterCollection {
        return $this->collection(RegisterCollection::class, "2.0/registers", compact('after', 'before', 'deleted', 'page_size'));
    }
}