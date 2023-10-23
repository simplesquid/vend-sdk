<?php

namespace SimpleSquid\Vend\ZeroNine\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetTaxByID
 *
 * Returns a single tax with the given ID.
 */
class GetTaxById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/taxes/{$this->taxId}";
	}


	/**
	 * @param string $taxId An ID of an existing tax object.
	 */
	public function __construct(
		protected string $taxId,
	) {
	}
}
