<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\CustomerGroupCollection;

class CustomerGroupsManager
{
    use ManagesResources;

    /**
     * List customer groups.
     * Returns a paginated list of customer groups.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return CustomerGroupCollection
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
        int $before = null
    ): CustomerGroupCollection {
        return $this->collection(CustomerGroupCollection::class, '2.0/customer_groups',
                                 compact('page_size', 'after', 'before'));
    }
}
