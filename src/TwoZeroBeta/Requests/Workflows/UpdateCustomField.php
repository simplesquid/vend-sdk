<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\Workflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * update-custom-field
 *
 * Updates properties on a custom field.
 */
class UpdateCustomField extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/workflows/custom_fields/{$this->customFieldId}";
    }

    /**
     * @param  string  $customFieldId The ID of the custom field that you want to update.
     */
    public function __construct(
        protected string $customFieldId,
    ) {
    }
}
