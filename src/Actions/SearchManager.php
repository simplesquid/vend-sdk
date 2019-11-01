<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\CustomerCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\ProductCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\SalesCollection;
use SimpleSquid\Vend\Resources\TwoDotZero\Search;
use Spatie\DataTransferObject\DataTransferObjectCollection;

class SearchManager
{
    use ManagesResources;

    /**
     * Search for resources.
     * This endpoint allows integrators to search all of the most commonly used resources, **sales**, **products** and **customers**. Each type allowing search by a number of different parameters.
     *
     * ### Supported resource types and attributes
     *
     * **Sales**
     * - date_from
     * - date_to
     * - status
     * - invoice_number
     * - customer_id
     * - user_id
     * - outlet_id
     *
     * **Products**
     * - sku
     * - supplier_id
     * - brand_id
     * - tag_id
     * - product_type_id
     * - variant_parent_id
     *
     * **Customers**
     * - customer_code
     * - first_name
     * - last_name
     * - company_name
     *
     * ### Sorting and pagination
     *
     * Unlike other endpoints in the API 2.0, search results from this endpoint can be sorted by any of the attributes above. Because of that, the default pagination mechanism is not appropriate for this endpoint. Instead, this endpoint uses `offset` and `page_size` attributes to handle search results spanning multiple pages.
     *
     * @param  string        $type             The entity type to search for. One of: `sales`, `products`, `customers`.
     * @param  Search|array  $query            The search query.
     * @param  int|null      $page_size        The maximum number of objects to be included in the response, currently limited to 10000.
     * @param  int|null      $offset           The number of objects to be "skipped" for the response. Used for pagination.
     * @param  string|null   $order_by         The attribute used to sort items returned in the response.
     * @param  string|null   $order_direction  Sorting direction. One of: `asc`, `desc`.
     *
     * @return DataTransferObjectCollection
     *
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(
        string $type,
        $query,
        int $page_size = null,
        int $offset = null,
        string $order_by = null,
        string $order_direction = null
    ): DataTransferObjectCollection {
        if ($type === 'sales') {
            $collection = SalesCollection::class;
        } elseif ($type === 'products') {
            $collection = ProductCollection::class;
        } elseif ($type === 'customers') {
            $collection = CustomerCollection::class;
        } else {
            return null;
        }

        if ($query instanceof Search) {
            $query = $query->toArray();
        }

        return $this->collection($collection, '2.0/search',
                                 array_merge($query, compact('type', 'page_size', 'offset', 'order_by', 'order_direction')));
    }
}
