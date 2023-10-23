<?php

namespace SimpleSquid\Vend\TwoZero\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteConsignmentByID
 *
 * Deletes the consignment with the given ID.
 */
class DeleteConsignmentById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
