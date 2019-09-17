<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Supplier;
use SimpleSquid\Vend\Resources\TwoDotZero\SupplierCollection;
use SimpleSquid\Vend\Resources\ZeroDotNine\SupplierUpdateBase;

class SuppliersManager
{
    use ManagesResources;

    /**
     * Create or update a supplier.
     * Returns a single supplier object.
     *
     * @param  SupplierUpdateBase|array  $supplier
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\Supplier
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create($supplier): \SimpleSquid\Vend\Resources\ZeroDotNine\Supplier
    {
        if ($supplier instanceof SupplierUpdateBase) {
            $supplier = $supplier->toArray();
        }

        return $this->createResource(\SimpleSquid\Vend\Resources\ZeroDotNine\Supplier::class, 'supplier', $supplier);
    }

    /**
     * Delete a supplier.
     * Deletes a single supplier by ID.
     *
     * @param  string  $id  The ID of the supplier to be deleted.
     *
     * @return bool
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function delete(string $id): bool
    {
        return $this->deleteResource("supplier/$id");
    }

    /**
     * Get a single supplier.
     * Returns a single supplier with a given ID.
     *
     * @param  string  $id  Valid supplier ID.
     *
     * @return Supplier
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Supplier
    {
        return $this->single(Supplier::class, "2.0/suppliers/$id");
    }

    /**
     * List suppliers.
     * Returns a paginated list of suppliers.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return SupplierCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(int $page_size = null, int $after = null, int $before = null): SupplierCollection
    {
        return $this->collection(SupplierCollection::class, "2.0/suppliers", compact('after', 'before', 'page_size'));
    }

    /**
     * Create or update a supplier.
     * Returns a single supplier object.
     *
     * @param  string                    $id  A valid supplier ID.
     * @param  SupplierUpdateBase|array  $supplier
     *
     * @return \SimpleSquid\Vend\Resources\ZeroDotNine\Supplier
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function update(string $id, $supplier): \SimpleSquid\Vend\Resources\ZeroDotNine\Supplier
    {
        if ($supplier instanceof SupplierUpdateBase) {
            $supplier = $supplier->toArray();
        }

        return $this->createResource(\SimpleSquid\Vend\Resources\ZeroDotNine\Supplier::class, 'supplier', array_merge(compact('id'), $supplier));
    }
}