<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetSupplierByID
 *
 * **DEPRECATED** This endpoint has a 2.0 equivalent. We recommend using that instead.
 * Returns a single
 * supplier with the given ID.
 */
class GetSupplierById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/supplier/{$this->supplierId}";
	}


	/**
	 * @param string $supplierId An ID of an existing supplier object
	 */
	public function __construct(
		protected string $supplierId,
	) {
	}
}
