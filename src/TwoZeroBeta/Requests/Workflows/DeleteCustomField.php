<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-custom-field
 *
 * Delete a custom field and all the values stored on that field.
 */
class DeleteCustomField extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/workflows/custom_fields/{$this->customFieldId}";
	}


	/**
	 * @param string $customFieldId The ID of the custom field that you want deleted.
	 */
	public function __construct(
		protected string $customFieldId,
	) {
	}
}
