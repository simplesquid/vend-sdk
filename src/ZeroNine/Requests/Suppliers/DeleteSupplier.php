<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSupplier
 *
 * Deletes a single supplier by ID.
 */
class DeleteSupplier extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/supplier/{$this->supplierId}";
	}


	/**
	 * @param string $supplierId The ID of the supplier to be deleted.
	 */
	public function __construct(
		protected string $supplierId,
	) {
	}
}
