<?php

namespace SimpleSquid\Vend\TwoZeroBeta\Requests\VariantAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListVariantAttributes
 *
 * Retrieve all Variant Attributes.
 */
class ListVariantAttributes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/variant_attributes";
	}


	/**
	 * @param null|bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function __construct(
		protected ?bool $deleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['deleted' => $this->deleted]);
	}
}
