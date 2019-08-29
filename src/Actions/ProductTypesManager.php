<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\ProductType;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductTypeCollection;

class ProductTypesManager
{
    use ManagesResources;

    /**
     * Get a single product type.
     * Returns a single product type with a given ID.
     *
     * @param  string  $id  Valid product type ID.
     *
     * @return ProductType
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): ProductType
    {
        return $this->single(ProductType::class, "2.0/product_types/$id");
    }

    /**
     * List product types.
     * Returns a paginated list of product types.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return ProductTypeCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(int $page_size = null, int $after = null, int $before = null): ProductTypeCollection
    {
        return $this->collection(ProductTypeCollection::class, "2.0/product_types", compact('after', 'before', 'page_size'));
    }
}