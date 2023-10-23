<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomFieldValues
 *
 * Returns the custom field values for a given entity.
 */
class GetCustomFieldValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/workflows/custom_fields/values";
	}


	/**
	 * @param string $entity The entity type.
	 * @param string $entityId The entity ID.
	 */
	public function __construct(
		protected string $entity,
		protected string $entityId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['entity' => $this->entity, 'entity_id' => $this->entityId]);
	}
}
