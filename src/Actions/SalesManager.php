<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Sale;
use SimpleSquid\Vend\Resources\TwoDotZero\SaleCollection;
use SimpleSquid\Vend\Resources\ZeroDotNine\RegisterSale;

class SalesManager
{
    use ManagesResources;

    /**
     * Get a single sale.
     * Returns a single sale with a given ID.
     *
     * @param  string  $id  Valid sale ID.
     *
     * @return Sale
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Sale
    {
        return $this->single(Sale::class, "2.0/sales/$id");
    }

    /**
     * List Sales.
     * Returns a paginated list of sales.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return SaleCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(int $page_size = null, int $after = null, int $before = null): SaleCollection
    {
        return $this->collection(SaleCollection::class, "2.0/sales", compact('after', 'before', 'page_size'));
    }

    /**
     * Create a register sale.
     * Returns a single new register sale object.
     *
     * @param  array  $body  TODO: Could be RegisterSaleUpdateBase.
     *
     * @return RegisterSale
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create(array $body): RegisterSale
    {
        return $this->createResource(RegisterSale::class, 'register_sales', $body);
    }

    /**
     * Update a register sale.
     * Returns a single updated register sale object.
     *
     * @param  string  $id    A valid register sale ID.
     * @param  array   $body  TODO: Could be RegisterSaleUpdateBase.
     *
     * @return RegisterSale
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function update(string $id, array $body): RegisterSale
    {
        return $this->createResource(RegisterSale::class, 'register_sales', array_merge(compact('id'), $body));
    }

}