<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\TaxCollection;
use SimpleSquid\Vend\Resources\ZeroDotNine\Tax;
use SimpleSquid\Vend\Resources\ZeroDotNine\TaxBase;

class TaxesManager
{
    use ManagesResources;

    /**
     * Create a tax.
     * Creates a new tax.
     *
     * @param  TaxBase|array  $tax
     *
     * @return Tax
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function create($tax): Tax
    {
        if ($tax instanceof TaxBase) {
            $tax = $tax->toArray();
        }

        return $this->createResource(Tax::class, 'taxes', $tax);
    }

    /**
     * Get a single tax by ID.
     * Returns a single tax with the given ID.
     *
     * @param  string  $id  An ID of an existing tax object.
     *
     * @return Tax
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Tax
    {
        return $this->single(Tax::class, "taxes/$id", 'tax');
    }

    /**
     * List taxes.
     * Returns a paginated list of taxes.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return TaxCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(int $page_size = null, int $after = null, int $before = null): TaxCollection
    {
        return $this->collection(TaxCollection::class, "2.0/taxes", compact('after', 'before', 'page_size'));
    }
}