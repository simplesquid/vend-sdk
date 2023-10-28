<?php

namespace SimpleSquid\Vend\TwoZero\Requests\ServiceOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetService
 *
 * Get a single service order.
 */
class GetService extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/services/{$this->serviceId}";
    }

    /**
     * @param  string  $serviceId ID of the service to get
     */
    public function __construct(
        protected string $serviceId,
    ) {
    }
}
